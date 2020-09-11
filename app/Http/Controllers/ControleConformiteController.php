<?php

namespace App\Http\Controllers;

use App\Model\Balance;
use App\Model\PlanComptable;
use Illuminate\Http\Request;

class ControleConformiteController extends Controller
{
    public function index()
    {
        $plan_comptables = PlanComptable::all(['id', 'numero_compte']);

        $balances = Balance::all(['id', 'numero_compte', 'statut']);

        // if($plan-> )
        // dd($plan);

        // dd(strlen((string)$plan_comptables['100']->numero_compte));

        foreach ($plan_comptables as $plan_comptable) {
            // $plan_comptable->numero_compte;
            foreach ($balances as $balance) {
                if (strlen($plan_comptable->numero_compte) >= 3 && strlen($plan_comptable->numero_compte) <= 6) {
                    // dd(strpos('abc', 'abcde'));

                    // dd(strpos($plan_comptable->numero_compte, '101300000'));
                    // $pos = strpos($plan_comptable->numero_compte, $balance->numero_compte);
                    // $a = '10130000';

                    if (strpos($balance->numero_compte, $plan_comptable->numero_compte) !== false) { //PAY ATTENTION TO !==, not !=
                        echo 'strpos('.$balance->numero_compte.','.$plan_comptable->numero_compte.')';
                        echo '= '.true.'<br>';

                        if(empty($balance->statut))
                        {
                            $balance->statut = 'bon';
                            $balance->save();
                        }

                    } else {
                        echo 'strpos('.$balance->numero_compte.','.$plan_comptable->numero_compte.')';
                        echo '= '.false.'<br>';

                        if(empty($balance->statut))
                        {
                            $balance->statut = 'mauvais';
                            $balance->save();
                        }
                    }
                }
            }
        }
// die();
        dd($balances->pluck('numero_compte'), $balances->pluck('statut'));

        return view('Traitement.controle-conformite');
    }
}
