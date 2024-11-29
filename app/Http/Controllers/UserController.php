<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = [
            'email' => $validate['email'],
            'password' => $validate['password'],
        ];

        $user = AppUser::where('email', $credentials['email'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {

            // remember me cookies
            if ($request->has('rememberMe')) {
            }

            // store user id in session
            $request->session()->put('user_id', $user->user_id);
            return redirect()->route('home');
        }

        // if success, return to dashboard
        // if ($user) {
        //     return redirect()->route('home');
        // }

        // user doesn't exist
        return redirect()->route('login.index');
    }

    public function agentList()
    {
        return view('agentlist');
    }

    public function indexRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'confirmPassword' => 'required|string',
            'phoneNumber' => 'required|string'
        ]);

        // check password
        if ($request->password != $request->confirmPassword) {
            return redirect()->back()->withErrors(['Password do not match with confirm password'])->withInput();
        }

        // check IF email EXIST
        $email = AppUser::where('Email', $validate['email'])->first();

        // email exist
        if ($email) {
            return redirect()->back()->withErrors(['Email existed, please use other email'])->withInput();
        }

        // email doesn't exist, continue with login
        $credentials = [
            'email' => $validate['email'],
            'password' => Hash::make($validate['password'])
        ];

        $user = AppUser::create([
            'name' => $validate['firstName'] . ' ' . $validate['lastName'],
            'email' => $validate['email'],
            'password' => $credentials['password'],
            'phone_number' => $validate['phoneNumber']
        ]);



        return view('home');
    }
}
