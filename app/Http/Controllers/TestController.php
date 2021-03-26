<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;

class TestController extends Controller
{
//    public  function index(){
//        return view('test');
//    }


    public function calculate(Request $request ){
        $a= $request->numberOne;
        $b= $request->numberTwo;
        $c= $request->action;


        if ($c=='addition'){
            return $a + $b;
        }
        elseif ($c=='subtraction'){
            return $a - $b;
        }
        elseif ($c=='multiplication'){
            return $a * $b;
        }
        elseif ($c=='division'){
            return $a / $b;
        }
        else
            return "this action isn't allowed";

    }
}
