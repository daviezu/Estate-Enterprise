<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

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
        
        // $mahasiswa->alamat = $validateData['alamat'];
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
            return redirect()->route('profile.index')->with('success', 'User profile updated successfully');
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

        if (!Hash::check($request['currentPassword'], $user->password)) {
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
        return redirect()->route('profile.index')->with('success', 'User password updated successfully');
    }

    public function updateProfilePicture(Request $request)
    {
        $validate = $request->validate([
            'profilePicture' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);
        if ($user) {

            if (!file_exists(public_path('images/profiles'))) {
                mkdir(public_path('images/profiles'), 0755, true);
            }

            if ($request->hasFile('profilePicture')) {
                // Storage Path
                $directory = public_path('images/profiles');

                // Generate a unique file name
                $filename = Str::random(20) . '.' . $request->file('profilePicture')->getClientOriginalExtension();

                $request->file('profilePicture')->move($directory, $filename);

                // $image = Image::make($request->file('profilePicture'))->resize(900, 600)->save($directory . '/' . $filename);

                // delete the old picture if exists
                if ($user->picture_path && file_exists(public_path($user->picture_path))) {
                    unlink(public_path($user->picture_path));
                }

                $path = 'images/profiles/' . $filename;
                $user->picture_path = $path;
                // $user->picture_path ="TEST URL PICTURE";
                $user->save();

                if ($user->save()) {
                    return redirect()->route('profile.index')->with('success', 'Profile picture updated successfully.');
                } else {
                    return redirect()->back()->with(['error' => 'Failed to update profile picture in the database.']);
                }
            }
            return redirect()->back()->with(['error' => 'No file uploaded.']);
        }
        return redirect()->back()->with(['error' => 'User not exist.']);
    }

    public function deleteProfilePicture(Request $request)
    {
        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User not exist.']);
        }
        // check if user has a profile picture
        if ($user->picture_path) {
            if (file_exists(public_path($user->picture_path))) {
                unlink(public_path($user->picture_path));
            }
            $user->picture_path = null;
            $user->save();
            return redirect()->route('profile.index')->with('success', 'Profile pictured deleted successfully');
        }
        return redirect()->back()->with(['error' => 'No profile picture to delete.']);
    }
}
