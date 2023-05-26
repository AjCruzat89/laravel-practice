<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogin(Request $request){
        $name = $_POST['username'];
        $password = $_POST['password'];
        echo $name;
        echo $password;
    }
}
