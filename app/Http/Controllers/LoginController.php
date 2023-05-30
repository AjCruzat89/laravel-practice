<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class LoginController extends Controller
{
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $encpass = md5($password);

        $existingUser = Users::where('username', $username)
        ->where('password', $encpass)
        ->first();

        if($existingUser){
            session()->put('username', $username);
            echo '<script>alert("Successfully Logged In!!")</script>';
            echo '<script>window.location.href = "index"</script>';
        }

        else{
            echo '<script>alert("Incorrect Username or Password!!")</script>';
            echo '<script>window.location.href = "login"</script>';
        }
    }

    public function logout(Request $request){
        if(isset($_GET['logout'])){
            session()->flush();
            return redirect('login');
        }
    }
}
