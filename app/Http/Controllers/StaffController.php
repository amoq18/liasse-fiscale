<?php

namespace App\Http\Controllers;

use App\ConseilAdmin;
use App\Model\Entreprise;
use App\Model\StaffDirigeant;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();

        return view('Staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();

        if(empty($entreprises['0'])) {
            return redirect()->route('entreprise.create')->with(['alert_entreprise_create' => "Vous devez créer premièrement l'Entreprise"]);
        } else {
            return view('Staff.create', compact('entreprises'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());

        $staff = new Staff();
        $staff->nom = request('nom_staff');
        $staff->prenom = request('prenom_staff');
        $staff->qualite = request('qualite_staff');
        $staff->nature_apport = request('nature_apport_staff');
        $staff->pourcentage_apport = request('pourcentage_apport_staff');
        $staff->valeur_apport = request('valeur_apport_staff');
        if (request('dirigeant') == 'on')
        {
            $staff->type = 'Dirigeant';
        }
        elseif (request('conseilAdmin') == 'on')
        {
            $staff->type = "Conseil d'Administration";
        }

        // reste relation 1-n, 1-n entre Staff et Entreprise

        $staff->save();

        return back()->with(["success_staff_create" => "Staff créée avec succès"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConseilAdmin  $conseilAdmin
     * @return \Illuminate\Http\Response
     */
    public function show($idStaff)
    {
        $staff = Staff::findOrFail($idStaff);

        return view('Staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function delete($idStaff)
    {
        $staff = Staff::findOrFail($idStaff)->delete();

        return back()->with(["success_staff_delete" => "Staff supprimé avec succès"]);
    }
}
