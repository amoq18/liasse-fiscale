<?php

namespace App\Http\Controllers;

use App\Imports\PlansImport;
use App\Model\Entreprise;
use App\Model\PlanComptable;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PlanComptableController extends Controller
{
    public function excel()
    {
        // Supprime tout le contenu de la bdd
        PlanComptable::select('*')->delete();

        Excel::import(new PlansImport, request()->file('excel_file')->store('temp'));

        Toastr::success('Le fichier excel a été bien importé','Importation Excel');

        return redirect()->route('structure.plan-comptable.index');
    }

    public function index()
    {
        PlanComptable::where('poste', 'Poste')->delete();

        $plans_comptables = PlanComptable::all();

        $entreprises = Entreprise::with('exercices')->get();

        return view('Structure.liste_plans_comptables', compact('plans_comptables', 'entreprises'));
    }
}
