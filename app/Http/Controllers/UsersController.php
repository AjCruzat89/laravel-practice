<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function ShowUsers(Request $request)
    {
        $sessionUsername = $request->session()->get('username');

        $users = Users::paginate(10);

        // Find the user matching the session username
        $currentUser = Users::where('username', $sessionUsername)->first();

        return view('index', ['users' => $users, 'currentUser' => $currentUser]);
    }

    public function EditUsers($id)
    {
        $users = Users::find($id);

        return view('edit', ['users' => $users]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $sessionUsername = $request->session()->get('username');
        $currentUser = Users::where('username', $sessionUsername)->first();
        

        $users = Users::where('id', 'LIKE', "%{$keyword}%")
            ->orWhere('username', 'LIKE', "%{$keyword}%")
            ->orwhere('password', 'LIKE', "%{$keyword}%")
            ->paginate(10);

        return view('index', ['users' => $users, 'currentUser' => $currentUser]);
    }
}
