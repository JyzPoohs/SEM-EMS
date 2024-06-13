<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function saveDocuments(Request $request)
    {
        $request->validate([
            'slip_permohonan' => 'file|mimes:pdf,doc,docx',
            'borang_2' => 'file|mimes:pdf,doc,docx',
            'borang_4' => 'file|mimes:pdf,doc,docx',
            'borang_1' => 'file|mimes:pdf,doc,docx',
            'ujian_hiv' => 'file|mimes:pdf,doc,docx',
        ]);

        $documents = [];
        foreach ($request->file() as $key => $file) {
            $documents[$key] = $file->store('documents');
        }

        return redirect()->route('user.requestMarriageUser')->with('success', 'Documents uploaded successfully!');
    }

    public function saveBrideInfo(Request $request)
    {
        $request->validate([
            'P_IC_No' => 'required|string',
            'P_Name' => 'required|string',
            'birthday' => 'required|date',
            'age' => 'required|integer',
            'ethnic' => 'required|string',
            'nationality' => 'required|string',
            'ic_address' => 'required|string',
            'current_address' => 'required|string',
            'mobile_phone' => 'required|string',
            'home_phone' => 'nullable|string',
            'edu_level' => 'required|string',
            'employment_sector' => 'nullable|string',
            'job_position' => 'nullable|string',
            'work_address' => 'nullable|string',
            'office_phone' => 'nullable|string',
            'email' => 'nullable|email',
            'income' => 'nullable|numeric',
            'marital_status_before' => 'nullable|string',
            'pre_marriage_course_certificate' => 'nullable|string',
            'convert_status' => 'required|string',
        ]);

        // Save bride info to the database

        return redirect()->route('user.FormMarriage')->with('success', 'Bride information saved successfully!');
    }

    public function saveGroomInfo(Request $request)
    {
        $request->validate([
            'U_IC_No' => 'required|string',
            'name' => 'required|string',
            'birthday' => 'required|date',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'ethnic' => 'required|string',
            'nationality' => 'required|string',
            'ic_address' => 'required|string',
            'current_address' => 'required|string',
            'mobile_phone' => 'required|string',
            'home_phone' => 'nullable|string',
            'edu_level' => 'required|string',
            'employment_sector' => 'nullable|string',
            'job_position' => 'nullable|string',
            'work_address' => 'nullable|string',
            'office_phone' => 'nullable|string',
            'email' => 'nullable|email',
            'income' => 'nullable|numeric',
            'marital_status_before' => 'nullable|string',
            'pre_marriage_course_certificate' => 'nullable|string',
            'convert_status' => 'required|string',
        ]);

        // Save groom info to the database

        return redirect()->route('user.FormBrides')->with('success', 'Groom information saved successfully!');
    }

    public function saveMarriageInfo(Request $request)
    {
        $request->validate([
            'tarikh_mohon' => 'required|date',
            'tempat_kahwin' => 'required|string',
            'negara' => 'required|string',
            'negeri' => 'required|string',
            'tarikh_akad_nikah' => 'required|date',
            'alamat_tempat_kahwin' => 'required|string',
            'jenis_mas_kahwin' => 'required|string',
            'mas_kahwin' => 'required|numeric',
            'hantaran' => 'nullable|numeric',
            'nama_wali' => 'required|string',
            'no_kad_pengenalan_wali' => 'required|string',
            'alamat_wali' => 'required|string',
            'tarikh_lahir' => 'required|date',
            'umur_wali' => 'required|integer',
            'no_telefon_wali' => 'required|string',
            'hubungan' => 'required|string',
            'tarikh_nikah_ibu_bapa' => 'required|date',
            'no_sijil_nikah_ibu_bapa' => 'required|string',
            'nama_pelulus' => 'required|string',
            'nama_saksi_1' => 'required|string',
            'no_kad_pengenalan_saksi_1' => 'required|string',
            'umur_saksi_1' => 'required|integer',
            'alamat_saksi_1' => 'required|string',
            'no_telefon_saksi_1' => 'required|string',
            'nama_saksi_2' => 'required|string',
            'no_kad_pengenalan_saksi_2' => 'required|string',
            'umur_saksi_2' => 'required|integer',
            'alamat_saksi_2' => 'required|string',
            'no_telefon_saksi_2' => 'required|string',
            'document' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        // Save marriage info to the database

        return redirect()->route('user.Document')->with('success', 'Marriage information saved successfully!');
    }
}
