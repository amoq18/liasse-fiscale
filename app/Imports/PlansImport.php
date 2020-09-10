<?php

namespace App\Imports;

use App\Model\PlanComptable;
use Maatwebsite\Excel\Concerns\ToModel;

class PlansImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // if ($row[0] == 'N° Compte') {
        //     return null;
        // }
        // if ($row[1] == 'Poste') {
        //     return null;
        // }
        // if ($row[2] == 'Intitulé du compte') {
        //     return null;
        // }
        // if ($row[3] == 'Nature') {
        //     return null;
        // }
        // if ($row[4] == 'Solde débiteur') {
        //     return null;
        // }
        // if ($row[5] == 'Solde créditeur') {
        //     return null;
        // }

        // if ($row[0] == 0) {
        //     $row[0] = 0;
        // }
        // if ($row[1] == 0) {
        //     $row[1] = 0;
        // }
        // if ($row[2] == 0) {
        //     $row[2] = 0;
        // }
        // if ($row[3] == 0) {
        //     $row[3] = 0;
        // }

        // var_dump($row);

        return new PlanComptable([
            'numero_compte' => $row[0],
            'poste' => $row[1],
            'intitule_compte' => $row[2],
            'nature' => $row[3],
            'solde_debit' => $row[4],
            'solde_credit' => $row[5],
        ]);
    }
}
