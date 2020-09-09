<?php

namespace App\Http\Controllers;

use App\Imports\PlansImport;
use App\Model\PlanComptable;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PlanComptableController extends Controller
{
    public function excel()
    {
        Excel::import(new PlansImport, request()->file('excel_file')->store('temp'));

        Toastr::success('Le fichier excel a été bien importé','Importation Excel');

        return redirect()->route('structure.plan-comptable.index');
    }

    public function index()
    {
        $plans_comptables = PlanComptable::all();

        return view('Structure.liste_plans_comptables', compact('plans_comptables'));
    }
}
