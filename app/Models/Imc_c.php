<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imc_c extends Model{

    public function calc(){

        $h = $_GET['altura'];
        $kg = $_GET['kg'];

        $r = $kg/($h*$h);

        if($r<18.5){
            $ty="abaixo";
        }
            elseif($r<24.9){
                $ty="normal";
            }
                elseif($r<24.9){
                    $ty="acima";
                }
                    else{
                        $ty="obeso";
                    }

        return $r."|".$ty;

    }

    use HasFactory;
}
