<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NumeroCompte extends Model
{
    protected $guarded = [];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function banque()
    {
        return $this->belongsTo(Banque::class);
    }
}
