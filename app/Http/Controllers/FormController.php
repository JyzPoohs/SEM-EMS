<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showGroomForm()
    {
        return view('formGrooms');
    }

    public function showBrideForm()
    {
        return view('formBrides');
    }

    public function showMarriageForm()
    {
        return view('formMarriage');
    }

    public function showDocumentForm()
    {
        return view('document');
    }

    public function showRequestMarriage()
    {
        return view('requestMarriageUser');
    }
}
