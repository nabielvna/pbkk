<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

class PBKK1Controller extends Controller
{
    
    public function evenOdd(Request $request){
        $numberDetails = [];
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getEvenOdd($n); 
        }
        return view('PBKK1.even-odd',compact('numberDetails'));
    }

    public function primeNumber(Request $request){
        $numberDetails = [];
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getPrime($n);
        }
        return view('PBKK1.prime-number',compact('numberDetails'));
    }

    public function fibonacci(Request $request){
        $numberDetails = [];
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getFibonaci($n);
        }

        return view('PBKK1.fibonacci',compact('numberDetails'));
    }
    
    public function param1($param1 = ''){
        $data['param1'] = $param1;
        return view('PBKK1.param1',compact('data'));
    }

    public function param2($param1 ='', $param2 =''){
        $data['param1'] = $param1;
        $data['param2'] = $param2;
        return view('PBKK1.param2',compact('data'));
    }

}
