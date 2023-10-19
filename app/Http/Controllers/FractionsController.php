<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FractionsController extends Controller
{
    public function fractions(){
        return view('base.fractions');
    }
}
