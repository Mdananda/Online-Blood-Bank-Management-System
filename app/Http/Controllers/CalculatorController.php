<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
            $firstnumber = $request->input('firstnumber');
            $secondnumber = $request->input('secondnumber');
            $operator = $request->input('operator');
            $result = 0;
            if ($operator == '+') {
                $result = $firstnumber + $secondnumber;
            }elseif ($operator == '-') {
                $result = $firstnumber - $secondnumber;
            }elseif($operator=='*'){
                $result = $firstnumber * $secondnumber;
            }elseif ($operator=='/' and $secondnumber != 0) {
                $result = $firstnumber / $secondnumber;
                $result = number_format($result, 2);
            }elseif ($operator=='/' or $operator=='%' and $secondnumber == 0) {
                return redirect()->back()->with('message','Error ...! ');
            }elseif ($operator=='%') {
                $result = $firstnumber % $secondnumber;
            }else{
                $result = 0;
            }
            //echo $result; 
            return redirect()->back()->with('message','Your Answer Is: ' .$result);
    }

    public function calculation(){
        return view ("welcome");
    }
}
