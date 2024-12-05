<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function updatePassword(Request $request)
    {
        $validate = $request->validate([
            'phoneNumber' => 'nullable|string',
            'currentPassword' => 'required|string',
            'newPassword' => 'required|string',
            'confirmNewPassword' => 'required|string'
        ]);

        // access user id through session
        // retrieve user ID 
        $userID = session('user_id');
        $user = AppUser::find($userID);

        if (!Hash::check($request['currentPassword'], $user->password))
        // if ($request['currentPassword'] != $user->password)
        {
            return redirect()->back()->withErrors(['Password do not match with current password'])->withInput();
        }

        if ($request['newPassword'] != $request['confirmNewPassword']) {
            return redirect()->back()->withErrors(['New password do not match with confirm password'])->withInput();
        }

        $dataToUpdate = [
            'password' => Hash::make($validate['newPassword']),
        ];

        if (!empty($validate['phoneNumber'])) {
            $dataToUpdate['phone_number'] = $validate['phoneNumber'];
        }

        $user->update($dataToUpdate);
        return redirect()->route('profile.index');
    }
}
