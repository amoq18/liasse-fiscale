<?php

namespace App\Http\Controllers;

use App\ConseilAdmin;
use App\Model\Entreprise;
use App\Model\Staff;
use Brian2694\Toastr\Facades\Toastr;
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

        $entreprises = Entreprise::all();

        return view('Staff.index', compact('staffs', 'entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();

        if(empty($entreprises['0']))
        {
            Toastr::warning("Vous devez créer premièrement l'Entreprise", "Entreprise");

            return redirect()->route('entreprise.create')->withRedirect('staff');
        }
        else
        {
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

        $staff->save();

        // Relation 1-n, 1-n entre Staff et Entreprise
        // Staff::findOrFail($staff->id)->entreprises()->sync(request('entreprise_id'));

        Toastr::success("Staff créée avec succès", "Staff");

        return back();
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
