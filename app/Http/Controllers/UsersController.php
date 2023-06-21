<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function ShowUsers(){
        $users = Users::paginate(5);
        
        return view('index', ['users' => $users]);
    }

    public function EditUsers($id){
        $users = Users::find($id);

        return view ('edit', ['users' => $users]);  
    }
}
