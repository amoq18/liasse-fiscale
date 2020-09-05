<?php

namespace App\Http\Controllers;

use App\Model\ConseilAdmin;
use App\Model\Entreprise;
use Illuminate\Http\Request;

class ConseilAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conseilAdmins = ConseilAdmin::all();

        return view('Staff.CA.index', compact('conseilAdmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();

        return view('Staff.CA.create', compact('entreprises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conseilAdmin = new ConseilAdmin();

        $conseilAdmin->nom = request('nom_conseil_admin');
        $conseilAdmin->prenom = request('prenom_conseil_admin');
        $conseilAdmin->qualite = request('qualite_conseil_admin');
        $conseilAdmin->nature_apport = request('nature_apport_conseil_admin');
        $conseilAdmin->pourcentage_apport = request('pourcentage_apport_conseil_admin');
        $conseilAdmin->valeur_apport = request('valeur_apport_conseil_admin');

        $conseilAdmin->save();

        return back()->with(["success_conseil_admin_create" => "Conseil d'Administration créée avec succès"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idConseil
     * @return \Illuminate\Http\Response
     */
    public function show($idConseil)
    {
        $conseilAdmin = ConseilAdmin::findOrFail($idConseil);

        return view('Staff.CA.show', compact('conseilAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idConseil
     * @return \Illuminate\Http\Response
     */
    public function edit($idConseil)
    {
        $conseilAdmin = ConseilAdmin::findOrFail($idConseil);

        return view('Staff.CA.edit', compact('conseilAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idConseil
     * @return \Illuminate\Http\Response
     */
    public function update($idConseil)
    {
        $conseilAdmin = ConseilAdmin::findOrFail($idConseil);

        $conseilAdmin->nom = request('nom_conseil_admin');
        $conseilAdmin->prenom = request('prenom_conseil_admin');
        $conseilAdmin->qualite = request('qualite_conseil_admin');
        $conseilAdmin->nature_apport = request('nature_apport_conseil_admin');
        $conseilAdmin->pourcentage_apport = request('pourcentage_apport_conseil_admin');
        $conseilAdmin->valeur_apport = request('valeur_apport_conseil_admin');

        $conseilAdmin->save();

        return redirect()->route('staff.ca.index')->with(["success_conseil_admin_modify" => "Conseil d'Administration modifié avec succès"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idConseil
     * @return \Illuminate\Http\Response
     */
    public function delete($idConseil)
    {
        ConseilAdmin::findOrFail($idConseil)->delete();

        return redirect()->route('staff.ca.index')->with(["success_conseil_admin_delete" => "Cet Conseil d'Administration a été supprimé avec succès"]);
    }
}
