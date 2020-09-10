<?php

namespace App\Model;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Database\Eloquent\Model;

class CompteBancaire extends Model
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
