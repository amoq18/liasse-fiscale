<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtatController extends Controller
{
    public function indexApercu()
    {
        return view('Edition.ApercuEtat.index');
    }

    public function indexGeneration()
    {
        return view('Edition.GenerationEtat.index');
    }
}
