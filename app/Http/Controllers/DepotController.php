<?php

namespace App\Http\Controllers;

use App\Models\NumeroPaiment;
use App\Models\UserTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepotController extends Controller
{
    public function create(){
        $user = Auth::user();

        $mode_paiement = NumeroPaiment::where('pays_id', $user->pays_id)->get();

        return view(
            'paiements.depot',
            [
                "mode_paiement" => $mode_paiement,
            ]
        );
    }

    public function store(Request $request){

        $request->validate([
            'montant' => 'required|numeric|min:100',
            'mode_paiement' => 'required',
        ]);

        $num = NumeroPaiment::find($request->mode_paiement);

        $numero = $num->numero;

        $mode = $num->nom;

        $type = 1;
        $user = Auth::user();

        $ref = rand(1, 999999);
        $exist = UserTransaction::where('reference', $ref)->first();
        while($exist){
            $ref = rand(1, 999999);
        }

        $reference = 'ref-'.$ref;

        $transaction = UserTransaction::create([
            'user_id' => $user->id,
            'transaction_id' => $type,
            'montant' => $request->montant,
            'numero_paiment_id' => $request->mode_paiement,
            'reference' => $reference,
        ]);

        // update user solde
        //$userSole = $user->solde;
        //$user->update([
        //   "solde" => $userSole + $request->montant
        //]);

        return redirect()->back()
            ->with('success', 'Votre demande de depot est en cours de traitement')
            ->with('numero', $numero)
            ->with('mode', $mode)
            ->with("reference", $transaction->reference)
            ->with("montant", $transaction->montant);

    }

}
