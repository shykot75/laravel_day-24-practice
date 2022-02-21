<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public $firstNumber ;
    protected $secondNumber ;
    private $operator;
    public $result;




    public function makeCalculator(Request $request){
//        return $request->all();
        $this->firstNumber = $request->first_number;
        $this->secondNumber = $request->second_number;
        $this->operator    = $request->operator;

//        $this->result =  $this->firstNumber + $this->secondNumber;
//        return $this->result;


        switch($this->operator){
            case '+':
                $this->result = $this->firstNumber + $this->secondNumber;
                break;

            case '-':
                $this->result = $this->firstNumber - $this->secondNumber;
                break;

            case '*':
                $this->result = $this->firstNumber * $this->secondNumber;
                break;

            case '/':
                $this->result = $this->firstNumber / $this->secondNumber;
                break;

            case '%':
                $this->result = $this->firstNumber % $this->secondNumber;
                break;
        }
        return view('calculator', ['value' => $this->result]);









    }













}
