<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    protected $length;
    protected $data = ['#', '@', '1', 'A', 'a', ')', '6', '!', 'G', '9', '*', '5'];
    protected $password;
    protected $i;
    protected $index;

    public function makePassWord(Request $request){
        $this->length = $request->password_length;
        for($this->i = 0; $this->i < $this->length; $this->i++){
            $this->index = rand(0, 11);
            $this->password .= $this->data[$this->index];
        }
        return view('password-generator', ['result' => $this->password]);
    }

}
