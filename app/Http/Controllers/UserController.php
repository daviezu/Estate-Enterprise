<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;

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

    public function indexEditProfileName()
    {
        return view('editprofile');
    }

    public function indexEditPassword()
    {
        return view('editpassword');
    }

    public function updateProfileName(Request $request)
    {

        $validate = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'username' => 'nullable|string'
        ]);

        // access user id through session
        // retrieve user ID 
        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);
        if ($user) {
            $dataToUpdate = [
                'first_name' => $validate['firstName'],
                'last_name' => $validate['lastName'],
            ];

            if (!empty($validate['username'])) {
                $dataToUpdate['username'] = $validate['username'];
            }

            $user->update($dataToUpdate);
            return redirect()->route('profile.index');
        }
    }
    public function updatePassword() {}
}
