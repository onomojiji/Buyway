<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestissementController extends Controller
{
    public function create(){

        return view("investissements.create");
    }
}
