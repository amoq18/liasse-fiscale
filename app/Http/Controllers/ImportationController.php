<?php

namespace App\Http\Controllers;

use App\Imports\BalancesImport;
use App\Model\Balance;
use App\Model\Entreprise;
use App\Model\Exercice;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportationController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();

        $exercices = Exercice::all();

        $balances = Balance::all();

        return view('Importation.index', compact('entreprises', 'exercices', 'balances'));
    }

    public function excel()
    {
        // dd(request()->all());
        Excel::import(new BalancesImport, request()->file('excel_file')->store('tempo'));
        return redirect()->route('importation.index')->with(['success_excel_import', 'le fichier a été bien importé']);
    if (false) {
        # code...

            $excel_file = request()->file('excel_file');

            //Display File Name
            echo 'File Name: '.$excel_file->getClientOriginalName();
            echo '<br>';

            //Display File Extension
            echo 'File Extension: '.$excel_file->getClientOriginalExtension();
            echo '<br>';

            //Display File Real Path
            echo 'File Real Path: '.$excel_file->getRealPath();
            echo '<br>';

            //Display File Size
            echo 'File Size: '.$excel_file->getSize();
            echo '<br>';

            //Display File Mime Type
            echo 'File Mime Type: '.$excel_file->getMimeType();

            //Move Uploaded File
            $destinationPath = 'uploads';
            $excel_file->move($destinationPath, time().'_'.$excel_file->getClientOriginalName());
        }
    }
}
