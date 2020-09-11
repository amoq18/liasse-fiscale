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
        if ($row[0] == 'N° COMPTE') {
            return null;
        }
        if ($row[1] == 'INTITULE DES COMPTES') {
            return null;
        }
        if ($row[2] == 'DEB PERIODE (D)') {
            return null;
        }
        if ($row[3] == 'DEB PERIODE (C)') {
            return null;
        }
        if ($row[4] == 'MVT PERIODE (D)') {
            return null;
        }
        if ($row[5] == 'MVT PERIODE (C)') {
            return null;
        }
        if ($row[6] == 'FIN PERIODE (D)') {
            return null;
        }
        if ($row[7] == 'FIN PERIODE (C)') {
            return null;
        }

        return new Balance([
            'numero_compte' => $row[0],
            'exercice_id' => 1,
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
