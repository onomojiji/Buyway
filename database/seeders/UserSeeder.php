<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
          "prenom" => "user",
            "nom" => "exemple",
            "email" => "example@user.com",
            "password" => bcrypt("password"),
            "pays_id" => 1,
            "telephone" => "0000000000",
        ];

        User::create($user);

        User::factory(10)->create();
    }
}
