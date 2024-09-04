<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUsers($name){

        return view('user',['name'=>$name]);
    }

    function getUsersAdmin(){

        return view('admin.admin');
    }
    function getUsersList(){
        $users=['shah','sial','malik'];

        return  view('userlist',['users'=>$users]);
    }
}
