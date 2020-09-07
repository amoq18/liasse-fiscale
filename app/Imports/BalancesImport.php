<?php

namespace App\Imports;

// use \App\Balance;
use App\Model\Balance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BalancesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Balance([
            'numero_compte' => $row[0],
            'intitule_compte' => $row[1],
            'deb_periode_c' => $row[2],
            'deb_periode_d' => $row[3],
            'mvt_periode_c' => $row[4],
            'mvt_periode_d' => $row[5],
            'fin_periode_c' => $row[6],
            'fin_periode_d' => $row[7],
        ]);
    }
}
