<?php

namespace App\Http\Controllers;

use App\Models\AppUser;

class UserController extends Controller
{

    public function agentList()
    {
        return view('agentlist');
    }

    public function indexProfile()
    {
        // retrieve user ID 
        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);

        if ($user) {
            return view('profile', ['user' => $user]);
        } else {
            return redirect()->route('login.index')->with('error', 'User not found. Please log in');
        }
    }

    public function editProfile()
    {
        return view('editprofile');
    }

    public function updateProfile() {}
}
