<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function primeNumber(){
        return view('prime-number');
    }
    public function series(){
        return view('series');
    }
    public function calculator(){
        return view('calculator');
    }
    public function passwordGenerator(){
        return view('password-generator');
    }
    public function blogs(){
        return view('blogs');
    }
}
