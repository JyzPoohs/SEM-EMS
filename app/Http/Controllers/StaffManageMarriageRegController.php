<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marriage_Registration;
use App\Models\Marriage_Request;
use App\Models\User;

class StaffManageMarriageRegController extends Controller
{
    public function manage()
    {
        $datas = Marriage_Registration::where('MR_Submit_Status', 'SUBMITTED')
            ->with('mohon.user')
            ->get();
        return view("registerMarriageStaff.marriageRegistrationList", compact('datas'));
    }

    public function editCouple($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        $couple = Marriage_Request::join('users as u', 'marriage_mohon.U_IC_No', '=', 'u.ic')
            ->where('U_IC_No', $data->U_IC_No)
            ->select('marriage_mohon.*', 'u.name as suami_name')
            ->first();

        return view('registerMarriageStaff.edit_registration', compact('data', 'couple'));
    }

    public function proof($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        //dd($data);
        if ($data) {
            $path = public_path('files/' . $data->MR_Receipt_Proof);
            if (!file_exists($path)) {
                return back()->with('error', 'Proof is Not Viewable/Available.');
            }
        } else {
            return back()->with('error', 'Proof is Not Viewable/Available.');
        }
        return response()->file($path);
    }

    public function eFormsMarriage($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        $couple = Marriage_Request::where('U_IC_No', $data->U_IC_No)->first();
        return view('registerMarriageStaff.viewE-FormMarriage-view', compact('data', 'couple'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'MR_Approval_Status' => 'required',
                'MR_Approval_Date' => 'required',
            ],
            [
                'MR_Approval_Status' => 'The status field is required',
                'MR_Approval_Date' => 'The date field is required'
            ]
        );
        Marriage_Registration::where('MR_ID', $id)->update([
            'MR_Approval_Status' => $request->MR_Approval_Status,
            'MR_Approval_Date' => $request->MR_Approval_Date,
        ]);
        return redirect()->route('staff.manageMarriage')->with('success', 'Marriage registration updated successfully');
    }

    public function destroy($id)
    {
        Marriage_Registration::where('MR_ID', $id)->delete();

        return redirect()->route('staff.manageMarriage')->with('success', 'Marriage registration deleted successfully');
    }
}
