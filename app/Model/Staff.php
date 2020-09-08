<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = [];

    protected $table = 'staffs';

    public function entreprises()
    {
        return $this->belongsToMany(Entreprise::class);
    }
}
