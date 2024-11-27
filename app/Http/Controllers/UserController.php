<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        $user = User::where('email', $credentials['email'])->first();

        // if success, return to dashboard
        if ($user) {
            return redirect()->route('homelogin');
        }

        // user doesn't exist
        return redirect()->route('login.index');
    }

    public function agentList(){
        return view('agentlist');
    }

    public function homeLogin() {
        return view('homelogin');
    }


    public function propertyListBeforeLogin() {
        return view('property');
    }

    public function propertyListAfterLogin() {
        return view('propertylogin');
    }


    public function indexRegister()
    {
        return view('register');
    }


    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'confirmPassword' => 'required|string',
            'phone_number' => 'required|string'
        ]);

        // check password
        if ($request->password != $request->confirmPassword) {
            return redirect()->back()->withErrors(['Password do not match with confirm password'])->withInput();
        }

        // check IF email EXIST
        $email = User::where('Email', $validate['email'])->first();

        // email exist
        if ($email) {
            return redirect()->back()->withErrors(['Email existed, please use other email'])->withInput();
        }

        // email doesn't exist, continue with login
        $credentials = [
            'email' => $validate['email'],
            'password' => Hash::make($validate['password'])
        ];

        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => $validate['password'],
            'phone_number' => $validate['phone_number']
        ]);

        return view('login');
    }
}
