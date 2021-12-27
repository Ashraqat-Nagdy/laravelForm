<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    //
    public function create(){
        return view('form');
    }

    public function success(Request $request){
        $this->validate($request,[

            "name" =>"required|regex:/^[a-zA-Z\s]*$/",
            "email" =>"required|email",
            "password" =>"required|min:6",
            "address" =>"required|min:10",
            "linkedin" =>"required",
            "gender" =>"required"



        ]);
    
    
    echo'Data Passed';
    
    }




}
