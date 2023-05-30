<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $rpassword = $request->input('rpassword');
        $encpass = md5($password);


        $existingUser = Users::where('username', $username)->first();

        if ($existingUser) {
            echo '<script>alert("Username Already Exists!!")</script>';
            echo '<script>window.location.href = "register"</script>';
        } elseif ($rpassword != $password) {
            echo '<script>alert("Password Is Not The Same!!")</script>';
            echo '<script>window.location.href = "register"</script>';
        } else {
            $user = new Users;
            $user->username = $username;
            $user->password = $encpass;
            $user->save();

            echo '<script>alert("Succesfully Registered!!")</script>';
            echo '<script>window.location.href = "login"</script>';
        }
    }
}
