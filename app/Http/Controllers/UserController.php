<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Cloudinary;

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

        // retrieve user ID 
        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);

        if ($user) {
            return view('editprofile', ['user' => $user]);
        } else {
            return redirect()->route('login.index')->with('error', 'User not found. Please log in');
        }
    }

    public function indexEditPassword()
    {
        
        // retrieve user ID 
        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);

        if ($user) {
            return view('editpassword', ['user' => $user]);
        } else {
            return redirect()->route('login.index')->with('error', 'User not found. Please log in');
        }
    }

    public function updateProfileName(Request $request)
    {
        $validate = $request->validate([
            'fullname' => 'required|string|max:50',
        ]);
        
        // $mahasiswa->alamat = $validateData['alamat'];
        // access user id through session
        // retrieve user ID 
        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);
        if ($user) {
            $dataToUpdate = [
                'fullname' => $validate['fullname'],
            ];

            if (!empty($validate['fullname'])) {
                $dataToUpdate['fullname'] = $validate['fullname'];
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

        $user = AppUser::find($userID);
        if ($user) {
            if ($request->hasFile('profilePicture')) {
                // Upload gambar ke Cloudinary
                try {
                    $uploadedFileUrl = Cloudinary::upload($request->file('profilePicture')->getRealPath(), [
                        'folder' => 'profiles', 
                        'public_id' => 'user_' . $userID, 
                        'overwrite' => true, 
                    ])->getSecurePath();

                    // Hapus gambar lama di Cloudinary  
                    // Cloudinary::destroy('profiles/' . $user->old_picture_public_id);

                    $user->picture_path = $uploadedFileUrl;

                    if ($user->save()) {
                        return redirect()->route('profile.index')->with('success', 'Profile picture updated successfully.');
                    } else {
                        return redirect()->back()->with(['error' => 'Failed to update profile picture in the database.']);
                    }
                } catch (\Exception $e) {
                    return redirect()->back()->with(['error' => 'Failed to upload image to Cloudinary: ' . $e->getMessage()]);
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

    public function updateRole(Request $request){
        $userID = session('user_id');

        // find user
        $user = AppUser::find($userID);
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User not exist.']);
        }


        $user->is_agent = true;
        $user->save();

        session(['user_id' => $user->user_id, 'is_logged_in' => true, 'role' => $user->is_agent]);

        return redirect()->back()->with(['success' => 'User role updated successfully.']);

       
    }
}
