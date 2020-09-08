<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
    protected $guarded = [];

    public function numero_comptes()
    {
        return $this->hasMany(NumeroCompte::class);
    }
}
