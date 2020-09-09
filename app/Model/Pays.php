<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $guarded = [];

    public function entreprises()
    {
        return $this->hasMany(Entreprise::class);
    }
}
