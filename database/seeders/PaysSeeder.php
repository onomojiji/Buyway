<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pays = [
            [
                "nom" => "Côte d'Ivoire",
                "code" => "CI",
                "indicatif" => "+225",
                "langue" => "fr",
                "devise" => "XOF",
                "drapeau" => "https://www.countryflags.io/ci/flat/64.png",
            ],
            [
                "nom" => "France",
                "code" => "FR",
                "indicatif" => "+33",
                "langue" => "fr",
                "devise" => "EUR",
                "drapeau" => "https://www.countryflags.io/fr/flat/64.png",
            ],
            [
                "nom" => "Belgique",
                "code" => "BE",
                "indicatif" => "+32",
                "langue" => "fr",
                "devise" => "EUR",
                "drapeau" => "https://www.countryflags.io/be/flat/64.png",
            ],
            [
                "nom" => "Suisse",
                "code" => "CH",
                "indicatif" => "+41",
                "langue" => "fr",
                "devise" => "CHF",
                "drapeau" => "https://www.countryflags.io/ch/flat/64.png",
            ],
            [
                "nom" => "Canada",
                "code" => "CA",
                "indicatif" => "+1",
                "langue" => "fr",
                "devise" => "CAD",
                "drapeau" => "https://www.countryflags.io/ca/flat/64.png",
            ],
            [
                "nom" => "Allemagne",
                "code" => "DE",
                "indicatif" => "+49",
                "langue" => "de",
                "devise" => "EUR",
                "drapeau" => "https://www.countryflags.io/de/flat/64.png",
            ],
            [
                "nom" => "Italie",
                "code" => "IT",
                "indicatif" => "+39",
                "langue" => "it",
                "devise" => "EUR",
                "drapeau" => "https://www.countryflags.io/it/flat/64.png",
            ],
            [
                "nom" => "Espagne",
                "code" => "ES",
                "indicatif" => "+34",
                "langue" => "es",
                "devise" => "EUR",
                "drapeau" => "https://www.countryflags.io/es/flat/64.png",
            ]
        ];

        foreach ($pays as $p) {
            \App\Models\Pays::create($p);
        }
    }
}
