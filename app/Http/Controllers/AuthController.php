<?php

namespace App\Http\Controllers;

use App\Utils\Helper;
use App\Models\AppUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $credentials = [
            'email' => $validate['email'],
            'password' => $validate['password'],
        ];

        $user = AppUser::where('email', $credentials['email'])->first();
        if (!$user) {
            return redirect()->route('login.index')->with('error', 'User does not exist');
        }

        if ($user && Hash::check($credentials['password'], $user->password)) {

            // remember me cookies
            if ($request->has('rememberMe')) {

                // generate unique token
                $token = Str::random(50);
                $user->remember_token = $token;
                $user->save();

                // set cookie for token
                Cookie::queue('remember_token', $token, 60 * 24 * 1); // 1 days
            }

            // store user id in session
            session(['user_id' => $user->user_id, 'is_logged_in' => true, 'role' => $user->is_agent]);
            return redirect()->route('home')->with("success", "Login Success");
        }
        return redirect()->route('login.index')->with('error', 'Password does not match');
    }

    public function indexRegister()
    {
        return view('register');
    }


    public function register(Request $request)
    {
        $validate = $request->validate([

            'fullname' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'confirmPassword' => 'required|string|same:password',
            'phoneNumber' => 'required|string|max:20'
        ]);

        // check password
        if ($request->password != $request->confirmPassword) {
            return redirect()->back()->with(['error', 'Password do not match with confirm password'])->withInput();
        }

        // Konversi nomor telepon ke format internasional
        $formattedPhoneNumber = Helper::convertPhoneNumberFormat($validate['phoneNumber']);

        if (!$formattedPhoneNumber) {
            return redirect()->back()
                ->withErrors(['phoneNumber' => 'Nomor telepon tidak valid. Harap masukkan nomor telepon yang benar.'])
                ->withInput();
        }

        

        // check IF email EXIST
        $email = AppUser::where('email', $validate['email'])->first();

        // email exist
        if ($email) {
            return redirect()->back()->withErrors(['email' => 'Email existed, please use other email'])->withInput();
        }

        // email doesn't exist, continue with login
        $credentials = [
            'email' => $validate['email'],
            'password' => Hash::make($validate['password'])
        ];

        $user = AppUser::create([
            // 'name' => $validate['firstName'] . ' ' . $validate['lastName'],
        
            'fullname' => $validate['fullname'],
            'email' => $validate['email'],
            'password' => $credentials['password'],
            'phone_number' => $formattedPhoneNumber
        ]);

        if ($user) {
            session(['user_id' => $user->user_id, 'is_logged_in' => true, 'role' => $user->is_agent]);
            return redirect()->route('home')->with('success', 'Registration Success');
        }
    }

    public function logout()
    {
        // clear the session
        session()->flush();
        session()->invalidate();
        session()->regenerateToken();

        // clear the remember me cookies if exist
        Cookie::queue(Cookie::forget('remember_me'));

        // logout the current user
        Auth::logout();

        return redirect()->route('login.index')->with('success', 'You have been logged out succesfully.');
    }
}
