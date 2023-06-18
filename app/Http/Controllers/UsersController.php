<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function ShowUsers(){
        $users = Users::all();
        
        return view('index', ['users' => $users]);
    }
}
