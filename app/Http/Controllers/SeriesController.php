<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    protected $i;
    protected $result;
    protected $sum;
    protected $resultSum;

    public function seriesAddition(Request $request){
//        return $request->all();

        for($this->i= $request->starting_number; $this->i <= $request->ending_number; $this->i++){
            $this->result .= $this->i.'+';
            $this->sum += $this->i;
        }
        $this->resultSum =  rtrim($this->result, '+') .' = '. $this->sum;
        return view('series', ['result' => $this->resultSum ]);





    }


}
