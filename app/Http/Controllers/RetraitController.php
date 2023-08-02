<?php

namespace App\Http\Controllers;

use App\Models\NumeroPaiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RetraitController extends Controller
{
    public function create(){
        $user = Auth::user();

        $mode_paiement = NumeroPaiment::where('pays_id', $user->pays_id)->get();

        return view(
            'paiements.retrait',
            [
                "mode_paiement" => $mode_paiement,
            ]
        );
    }

    public function store(Request $request){

        $user = Auth::user();

        $request->validate([
            'montant' => 'required|numeric|min:100',
            'mode_paiement' => 'required',
        ]);

        if ($request->montant > $user->solde){
            return redirect()->back()->with("fail", "Montant supérieur à votre solde.");
        }

        return redirect()->back()->with("success", "Retrait initié avec succès");
    }

}
