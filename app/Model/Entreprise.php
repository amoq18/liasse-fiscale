<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $guarded = [];

    public function exercices()
    {
        return $this->hasMany(Exercice::class);
    }

    // public function banques()
    // {
    //     return $this->belongsToMany(Banque::class);
    // }

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    public function staffs()
    {
        return $this->belongsToMany(Staff::class);
    }

    public function numero_comptes()
    {
        return $this->hasMany(NumeroCompte::class);
    }

    public function compte_bancaires()
    {
        return $this->hasMany(CompteBancaire::class);
    }
}
