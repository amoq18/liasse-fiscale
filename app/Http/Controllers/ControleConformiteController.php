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

        $balances = Balance::all(['id', 'numero_compte']);

        // if($plan-> )
        // dd($plan);

        // dd(strlen((string)$plan_comptables['100']->numero_compte));

        foreach ($plan_comptables as $plan_comptable)
        {
            // $plan_comptable->numero_compte;
            foreach ($balances as $balance)
            {
                if(strlen($plan_comptable->numero_compte) >= 3 && strlen($plan_comptable->numero_compte) <= 6)
                {
                    // dd(strpos('abc', 'abcde'));

                    // dd(strpos($plan_comptable->numero_compte, '101300000'));
                    $pos = strpos($plan_comptable->numero_compte, $balance->numero_compte);

                    if($pos === true)
                    {
                        $balance['statut'] = true;
                        $balance->save();
                    }
                    else
                    {
                        $balance['statut'] = false;
                        $balance->save();

                    }
                }

            }
        }

        dd($balances['statut']);

        return view('Traitement.controle-conformite');
    }
}
