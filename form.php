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
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $this->validate($request,[

            "name" =>"required|regex:/^[a-zA-Z\s]*$/",
            "email" =>"required|email",
            "password" =>"required|min:6",
            "address" =>"required|min:10",
            "linkedin" =>'required|regex:'.$regex,
            
            "gender" =>"required"



        ]);
    
    
    echo'Data Passed';
    
    }




}
