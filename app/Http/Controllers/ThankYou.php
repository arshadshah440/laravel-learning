<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThankYou extends Controller
{
    //
    function getForm(Request $request){
        
        $request->validate([
            'name'=>'required  | min:3 | max:10',
            'email'=>'required | email',
            'gridRadios'=>'required',
            'message'=>'required',
        ]);

        echo  $request->name;
        echo "<br>";
        echo  $request->email;
        echo "<br>";
        echo  $request->gridRadios;
        echo "<br>";
        echo  $request->message;
        echo "<br>";
        echo  $request->gridCheck1;
    }
}