<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    protected $check;
    protected $i;
    protected $number;

   public function prime(Request $request){
//       return $rqst->all();
//       return $rqst->pm_number;

       $this->number =$request->pm_number;


       if($this->number == 1 || $this->number==2){
           $this->check = "$this->number is Prime";
       }

       else{
           for($this->i = 2; $this->i < $this->number; $this->i++){
               if($this->number % $this->i == 0){
                   $this->check = "$this->number is not Prime";
               }
           }
           $this->check = "$this->number is Prime";
       }
       return view('prime-number', ['result' => $this->check] );





   }
}
