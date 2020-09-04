<?php

namespace App\Http\Controllers;

use App\Model\StaffDirigeant;
use Illuminate\Http\Request;

class StaffDirigeantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dirigeants = StaffDirigeant::all();

        return view('Staff.Dirigeant.index', compact('dirigeants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Staff.Dirigeant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dirigeant = new StaffDirigeant();
        $dirigeant->nom = request('nom_staff_dirigeant');
        $dirigeant->prenom = request('prenom_staff_dirigeant');
        $dirigeant->qualite = request('qualite_staff_dirigeant');

        $dirigeant->save();

        return redirect()->route('staff.dirigeant.index')->with(['success_staff_dirigeant_create' => 'Staff dirigeant créée avec succès']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idDirigeant)
    {
        $dirigeant = StaffDirigeant::findOrFail($idDirigeant);

        return view('staff.dirigeant.show', compact('dirigeant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idDirigeant)
    {
        $dirigeant = StaffDirigeant::findOrFail($idDirigeant);

        return view('staff.dirigeant.edit', compact('dirigeant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($idDirigeant)
    {
        $dirigeant = StaffDirigeant::findOrFail($idDirigeant);
        $dirigeant->nom = request('nom_staff_dirigeant');
        $dirigeant->prenom = request('prenom_staff_dirigeant');
        $dirigeant->qualite = request('qualite_staff_dirigeant');

        $dirigeant->save();

        return redirect()->route('staff.dirigeant.index')->with(['success_staff_dirigeant_modify' => 'Staff dirigeant modifié avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($idDirigeant)
    {
        StaffDirigeant::findOrFail($idDirigeant)->delete();

        return redirect()->route('staff.dirigeant.index')->with(['success_staff_dirigeant_delete' => 'Staff dirigeant supprimé avec succès']);
    }
}
