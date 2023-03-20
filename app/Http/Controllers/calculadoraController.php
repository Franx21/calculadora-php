<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Result;

class calculadoraController extends Controller
{
    //
    public function calculate(Request $request)
    {
        $_COOKIE_name1 = "num";
        $_COOKIE_name2 = "op";
        $_COOKIE_value1 = "";
        $_COOKIE_value2 = "";

        if (isset($_POST['num'])) {
            $num = $_POST['input'] . $_POST['num'];
            return view('welcome')->with('num', $num);
        } else {
            $num = "";
        }
        if (isset($_POST['op'])) {
            $_COOKIE_value1 = $_POST['input'];
            setcookie($_COOKIE_name1, $_COOKIE_value1, time() + (86400 * 30), "/");

            $_COOKIE_value2 = $_POST['op'];
            setcookie($_COOKIE_name2, $_COOKIE_value2, time() + (86400 * 30), "/");
            $num = "";

            return view('welcome')->with('op', $_COOKIE_value2);
        }
        if (isset($_POST['equal'])) {
            $num = $_POST['input'];
            $op = $_COOKIE['op'];
            if ($op == "+") {
                $resultado = $_COOKIE['num'] + $num;
                $num = $resultado;
                return view('welcome')->with('num', $num);
            } elseif ($op == "-") {
                $resultado = $_COOKIE['num'] - $num;
                $num = $resultado;
                return view('welcome')->with('num', $num);
            } elseif ($op == "*") {
                $resultado = $_COOKIE['num'] * $num;
                $num = $resultado;
                return view('welcome')->with('num', $num);
            } elseif ($op == "/") {
                $resultado = $_COOKIE['num'] / $num;
                $num = $resultado;
                return view('welcome')->with('num', $num);
            }
        }
        if (isset($_POST['del'])) {
            unset($resul);
            return view('welcome');
        }
    }
}
