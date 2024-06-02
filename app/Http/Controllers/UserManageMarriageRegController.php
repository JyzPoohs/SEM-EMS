<?php

namespace App\Http\Controllers;

use App\Models\Marriage_Registration;
use App\Models\Marriage_Request;
use Illuminate\Http\Request;

class UserManageMarriageRegController extends Controller
{
    public function manage()
    {
        $ic = auth()->user()->ic;
        $datas = Marriage_Registration::where('U_IC_No', $ic)->with('mohon')->get();
        return view("registerMarriageUser.marriageRegistrationList", compact('datas'));
    }

    //Display the view form of the bride and groom information
    public function couple($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->with('mohon.user')->first();
        return view('registerMarriageUser.view_GroomBride', compact('data'));
    }

    public function viewEFormsMarriage($id)
    {
        $ic = auth()->user()->ic;
        $eform = Marriage_Request::where('U_IC_No', $ic)->first();
        $data = Marriage_Registration::where('MR_ID', $id)->with('mohon')->first();
        return view('registerMarriageUser.view_Marriage-view', compact('eform', 'data'));
    }

    public function proof($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        $path = public_path('files/' . $data->MR_Receipt_Proof);
        if (!file_exists($path)) {
            return back()->with('error', 'Proof is Not Viewable/Available.');
        }
        return response()->file($path);
    }

    public function addGroomBride()
    {
        $ic = auth()->user()->ic;
        $data = Marriage_Registration::where('U_IC_No', $ic)->with('mohon.user')->first();
        return view('registerMarriageUser.add_GroomBride-view', compact('data'));
    }

    public function addMarriage()
    {
        $ic = auth()->user()->ic;
        $eform = Marriage_Request::where('U_IC_No', $ic)->first();
        $data = Marriage_Registration::where('U_IC_No', $ic)->with('mohon.user')->first();
        return view('registerMarriageUser.add_Marriage-view', compact('eform', 'data'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'MR_Payment_Receipt' => 'required',
                'MR_Receipt_Proof' => 'required|mimes:png,jpg,jpeg,pdf|max:2048|filled',
                'MR_Time_Nikah' => 'required',
                'MR_Jurunikah_Name' => 'required',
                'MR_Lafaz_Taliq' => 'required',
                'request_id' => 'required',
            ],
            [
                'MR_Payment_Receipt.required' => 'Please enter the payment receipt number',
                'MR_Receipt_Proof.required' => 'Please upload the payment receipt',
                'MR_Receipt_Proof.mimes' => 'The file must be a file of type: png, jpg, jpeg, pdf',
                'MR_Receipt_Proof.max' => 'The file may not be greater than 2MB',
                'MR_Time_Nikah.required' => 'Please enter the time of nikah',
                'MR_Jurunikah_Name.required' => 'Please enter the Jurunikah name',
                'MR_Lafaz_Taliq.required' => 'Please select the Lafaz Taliq',
            ]
        );

        if ($request->hasFile('MR_Receipt_Proof')) {
            $file = $request->file('MR_Receipt_Proof');
            $filename = time() . '_' . $request->file('MR_Receipt_Proof')->getClientOriginalName();
            $directoryPath = public_path('files');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }
            $file->move($directoryPath, $filename);
        } else {
            $filename = '';
        }

        Marriage_Registration::create([
            'MR_Payment_Receipt' => $request->MR_Payment_Receipt,
            'MR_Receipt_Proof' => $filename,
            'MR_Time_Nikah' => $request->MR_Time_Nikah,
            'MR_Jurunikah_Name' => $request->MR_Jurunikah_Name,
            'MR_Lafaz_Taliq' => $request->MR_Lafaz_Taliq,
            'request_id' => $request->request_id,
            'MR_Submit_Status' => 'SAVED',
            'MR_Approval_Status' => 'PENDING',
            'U_IC_No' => auth()->user()->ic,
        ]);

        return redirect()->route('user.manageMarriageRegistration')->with('success', 'Application saved successfully');
    }

    public function submit($id)
    {
        Marriage_Registration::where('MR_ID', $id)->update(
            [
                'MR_Submit_Status' => 'SUBMITTED',
                'created_at' => now()
            ]
        );
        return redirect()->route('user.manageMarriageRegistration')->with('success', 'Application submited successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'MR_Payment_Receipt' => 'required',
                'MR_Receipt_Proof' => 'mimes:png,jpg,jpeg,pdf|max:2048',
                'MR_Time_Nikah' => 'required',
                'MR_Jurunikah_Name' => 'required',
                'MR_Lafaz_Taliq' => 'required',
            ],
            [
                'MR_Payment_Receipt.required' => 'Please enter the payment receipt number',
                'MR_Receipt_Proof.mimes' => 'The file must be a file of type: png, jpg, jpeg, pdf',
                'MR_Receipt_Proof.max' => 'The file may not be greater than 2MB',
                'MR_Time_Nikah.required' => 'Please enter the time of nikah',
                'MR_Jurunikah_Name.required' => 'Please enter the Jurunikah name',
                'MR_Lafaz_Taliq.required' => 'Please select the Lafaz Taliq',
            ]
        );

        $data = Marriage_Registration::where('MR_ID', $id)->first();

        if ($request->hasFile('MR_Receipt_Proof')) {
            $file = $request->file('MR_Receipt_Proof');
            $filename = time() . '_' . $request->file('MR_Receipt_Proof')->getClientOriginalName();
            $directoryPath = public_path('files');
            if (!file_exists($directoryPath)) {
                mkdir($directoryPath, 0777, true);
            }
            $file->move($directoryPath, $filename);
        } else {
            $filename = $data->MR_Receipt_Proof;
        }

        Marriage_Registration::where('MR_ID', $id)->update([
            'MR_Payment_Receipt' => $request->MR_Payment_Receipt,
            'MR_Receipt_Proof' => $filename,
            'MR_Time_Nikah' => $request->MR_Time_Nikah,
            'MR_Jurunikah_Name' => $request->MR_Jurunikah_Name,
            'MR_Lafaz_Taliq' => $request->MR_Lafaz_Taliq
        
        ]);

        return redirect()->route('user.manageMarriageRegistration')->with('success', 'Application updated successfully');
    }

    public function destroy($id)
    {
        $datas = Marriage_Registration::where('MR_ID', $id);

        if (!$datas) {
            return redirect()->back()->with('error', 'card not found.');
        }

        $datas->delete();
        return redirect()->route('user.manageMarriageRegistration')->with('success', 'Marriage Registration deleted successfully.');
    }
}
