<?php

namespace App\Http\Controllers;

use App\ConseilAdmin;
use App\Model\Entreprise;
use App\Model\StaffDirigeant;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();

        return view('Staff.create', compact('entreprises'));
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
        $res = "";
        if (request('dirigeant')) {
            $dirigeant = new StaffDirigeant();
            $dirigeant->nom = request('nom_staff');
            $dirigeant->prenom = request('prenom_staff');
            $dirigeant->qualite = request('qualite_staff');

            $dirigeant->save();
            $res = 'dirigeant';
        }
        if(request('conseilAdmin')) {
            $conseilAdmin = new ConseilAdmin();
            $conseilAdmin->nom = request('nom_staff');
            $conseilAdmin->prenom = request('prenom_staff');
            $conseilAdmin->qualite = request('qualite_staff');
            $conseilAdmin->nature_apport = request('nature_apport_staff');
            $conseilAdmin->pourcentage_apport = request('pourcentage_apport_staff');
            $conseilAdmin->valeur_apport = request('valeur_apport_staff');

            $conseilAdmin->save();

            $res= $res.' conseilAdmin';
        }
        // return $res;

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
        if(request('dirigeant')) {

        }
        if(request('conseilAdmin')) {
            $staff = ConseilAdmin::findOrFail($idStaff);
        }

        return view('Staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConseilAdmin  $conseilAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(ConseilAdmin $conseilAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConseilAdmin  $conseilAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConseilAdmin $conseilAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConseilAdmin  $conseilAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConseilAdmin $conseilAdmin)
    {
        //
    }
}
