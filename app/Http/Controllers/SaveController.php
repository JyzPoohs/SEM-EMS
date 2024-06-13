<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarriageData;

class SaveController extends Controller
{
    public function showDocumentForm()
    {
        return view('marriageReq.Document');
    }

    public function postDocumentForm(Request $request)
    {
        $request->validate([
            'document' => 'required|string|max:255',
        ]);

        $formData = $request->session()->get('formData', []);
        $formData['document'] = $request->document;
        $request->session()->put('formData', $formData);

        return redirect()->route('form.document')->with('success', 'Document data saved successfully!');
    }

    public function showBridesForm()
    {
        return view('marriageReq.FormBrides');
    }

    public function postBridesForm(Request $request)
    {
        $request->validate([
            'bride_name' => 'required|string|max:255',
        ]);

        $formData = $request->session()->get('formData', []);
        $formData['bride_name'] = $request->bride_name;
        $request->session()->put('formData', $formData);

        return redirect()->route('form.brides')->with('success', 'Brides data saved successfully!');
    }

    public function showGroomForm()
    {
        return view('marriageReq.FormGroom');
    }

    public function postGroomForm(Request $request)
    {
        $request->validate([
            'groom_name' => 'required|string|max:255',
        ]);

        $formData = $request->session()->get('formData', []);
        $formData['groom_name'] = $request->groom_name;
        $request->session()->put('formData', $formData);

        return redirect()->route('form.groom')->with('success', 'Groom data saved successfully!');
    }

    public function showMarriageForm()
    {
        return view('marriageReq.FormMarriage');
    }

    public function postMarriageForm(Request $request)
    {
        $request->validate([
            'marriage_date' => 'required|date',
        ]);

        $formData = $request->session()->get('formData', []);
        $formData['marriage_date'] = $request->marriage_date;

        // Save all data to the database
        $data = MarriageData::updateOrCreate(['id' => session('formData.id')], $formData);

        // Save the ID to session to link further steps if needed
        $request->session()->put('formData.id', $data->id);

        // Clear session data if the process is complete
        $request->session()->forget('formData');

        return redirect()->route('form.marriage')->with('success', 'Marriage data saved successfully!');
    }
}
