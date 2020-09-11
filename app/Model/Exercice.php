<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    protected $guarded = [];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function balance()
    {
        return $this->hasOne(Balance::class);
    }
}
