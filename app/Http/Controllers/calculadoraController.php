<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Result;

class calculadoraController extends Controller
{
    //
    public function calculate(Request $request){
        $num1 = $request->number1;
        $num2 = $request->number2;
        $op = $request->operador;
        if ($op == "+") {
            $resultado = $num1 + $num2;
            $resul = $resultado;
            return view('welcome')->with('resul', $resul);
        }elseif ($op == "-") {
            $resultado = $num1 - $num2;
            $resul = $resultado;
            return view('welcome')->with('resul', $resul);
        }elseif ($op == "*") {
            $resultado = $num1 * $num2;
            $resul = $resultado;
            return view('welcome')->with('resul', $resul);
        }elseif ($op == "/") {
            $resultado = $num1 / $num2;
            $resul = $resultado;
            return view('welcome')->with('resul', $resul);
        }else{
            $resul = 0;
            return view('welcome')->with('resul', $resul);
        }
    }
}
