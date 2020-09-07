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

    public function banques()
    {
        return $this->belongsToMany(Banque::class);
    }

    public function staffs()
    {
        return $this->belongsToMany(Staff::class);
    }
}
