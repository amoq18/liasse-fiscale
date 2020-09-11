<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $guarded = [];

    public function exercice()
    {
        return $this->belongsTo(Exercice::class);
    }
}
