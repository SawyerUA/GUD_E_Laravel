<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function rules(){
        return view('base.rules');
    }

    public function rules2(){
        return view('base.rules2');
    }

    public function rules3(){
        return view('base.rules3');
    }

    public function rules4(){
        return view('base.rules4');
    }

    public function rules5(){
        return view('base.rules5');
    }
}
