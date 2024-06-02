<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marriage_Registration;

class StaffManageMarriageRegController extends Controller
{
    public function manage()
    {
        $datas = Marriage_Registration::with('mohon.user')->get();
        return view("registerMarriageStaff.marriageRegistrationList", compact('datas'));
    }

    public function couple($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        return view('registerMarriageStaff.view-BrideGroom', compact('data'));
    }

    public function eFormsGrooms($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        return view('registerMarriageStaff.viewE-FormGrooms-view', compact('data'));
    }

    public function eFormsBrides($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        return view('registerMarriageStaff.viewE-FormBrides-view', compact('data'));
    }

    public function eFormsMarriage($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        return view('registerMarriageStaff.viewE-FormMarriage-view', compact('data'));
    }

    public function approveMarriageRegistration($id)
    {
        $data = Marriage_Registration::where('MR_ID', $id)->first();
        return view('registerMarriageStaff.editApprovalMarriageRegistration-view', compact('data'));
    }

    public function destroy($id)
    {
        Marriage_Registration::where('MR_ID', $id)->delete();

        return redirect()->route('staff.manageMarriage')->with('delete', 'Marriage registration deleted successfully');
    }
}
