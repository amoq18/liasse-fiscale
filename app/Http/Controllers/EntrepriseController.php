<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function create()
    {
        return view('Entreprise.create');
    }

    public function index()
    {
        return view('Entreprise.index');
    }
}
