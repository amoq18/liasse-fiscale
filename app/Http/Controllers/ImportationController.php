<?php

namespace App\Http\Controllers;

use App\Imports\BalancesImport;
use App\Model\Balance;
use App\Model\Entreprise;
use App\Model\Exercice;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportationController extends Controller
{
    public function index()
    {
        Balance::where('intitule_compte', null)->delete();

        $balances = Balance::all();

        $entreprises = Entreprise::with('exercices')->get();
// @dd($entreprises->first()->exercices->first());
        if (empty($entreprises['0']))
        {
            Toastr::warning("Vous devez créer l'Entreprise", "Entreprise");

            return redirect()->route('entreprise.create')->withRedirect('importation-balance1');
        }
        elseif (empty($entreprises['0']->exercices['0']))
        {
            Toastr::warning("Vous devez créer l'Exercice concernant l'Entreprise", "Exercice");

            return redirect()->route('exercice.create')->withRedirect('importation-balance2');
        }

        return view('Importation.index', compact('entreprises', 'balances'));
    }

    public function excel()
    {
        // Supprime tout le contenu de la bdd
        Balance::select('*')->delete();

        Excel::import(new BalancesImport, request()->file('excel_file')->store('temp'));

        Toastr::success('Le fichier excel a été bien importé','Importation Excel');

        return redirect()->route('importation.index');

        // if (false) {
        //     # code...

        //         $excel_file = request()->file('excel_file');

        //         //Display File Name
        //         echo 'File Name: '.$excel_file->getClientOriginalName();
        //         echo '<br>';

        //         //Display File Extension
        //         echo 'File Extension: '.$excel_file->getClientOriginalExtension();
        //         echo '<br>';

        //         //Display File Real Path
        //         echo 'File Real Path: '.$excel_file->getRealPath();
        //         echo '<br>';

        //         //Display File Size
        //         echo 'File Size: '.$excel_file->getSize();
        //         echo '<br>';

        //         //Display File Mime Type
        //         echo 'File Mime Type: '.$excel_file->getMimeType();

        //         //Move Uploaded File
        //         $destinationPath = 'uploads';
        //         $excel_file->move($destinationPath, time().'_'.$excel_file->getClientOriginalName());
        //}
    }
}
