<?php

namespace Database\Seeders;

use App\Models\Pays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumeroPaimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nbPays = count(Pays::all());

        $numeros = [
          [
              "numero" => "77 777 77 77",
              "nom" => "Orange Money",
              "icon" => "images/Orange_Money.png",
              "pays_id" => 1
          ],
            [
                "numero" => "66 666 66 66",
                "nom" => "MTN Mobile Money",
                "icon" => "images/MTNMOBILEMONEY.png",
                "pays_id" => 2
            ],
            [
                "numero" => "22 222 22 22",
                "nom" => "Moov Money",
                "icon" => "images/moovmoney.png",
                "pays_id" => 3
            ],
            [
                "numero" => "88 888 88 88",
                "nom" => "Orange Money",
                "icon" => "images/Orange_Money.png",
                "pays_id" => 4
            ],
            [
                "numero" => "99 999 99 99",
                "nom" => "Orange Money",
                "icon" => "images/Orange_Money.png",
                "pays_id" => 5
            ],
            [
                "numero" => "10 101 01 01",
                "nom" => "Airtel Money",
                "icon" => "images/airtel_money.png",
                "pays_id" => 6
            ],
            [
                "numero" => "77 777 77 77",
                "nom" => "Orange Money",
                "icon" => "images/Orange_Money.png",
                "pays_id" => 6
            ],
            [
                "numero" => "77 777 77 77",
                "nom" => "Orange Money",
                "icon" => "images/Orange_Money.png",
                "pays_id" => 1
            ],
        ];

        foreach ($numeros as $numero) {
            $numeroPaiment = new \App\Models\NumeroPaiment();
            $numeroPaiment->numero = $numero["numero"];
            $numeroPaiment->nom = $numero["nom"];
            $numeroPaiment->icon = $numero["icon"];
            $numeroPaiment->pays_id = $numero["pays_id"];
            $numeroPaiment->save();
        }
    }
}
