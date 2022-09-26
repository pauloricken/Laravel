<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Imc_c;

class Imc extends Controller
{
    public function index(){
        
        return view('in');

    }
    public function resp(){

        $x = new Imc_c();

        $imc = $x->calc();

        $dt = explode('|',$imc);

        return view('out',['imc'=>$dt[0],"tipo"=>$dt[1]]);

    }
}
