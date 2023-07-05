<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $encpass = md5($password);

        $existingUser = Users::whereRaw('BINARY username = ?', [$username])
            ->where('password', $encpass)
            ->first();

        if ($existingUser) {
            session()->put('username', $username);
            $successMessage = 'Login successful!';
            return view('login', compact('successMessage'));
        } else {
            $errorMessage = 'Incorrect Username or Password!';
            return view('login', compact('errorMessage'));
        }
    }

    public function logout(Request $request)
    {
        if (isset($_GET['logout'])) {
            session()->flush();
            return redirect('login');
        }
    }
}
