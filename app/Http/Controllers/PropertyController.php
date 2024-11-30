<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PropertyController extends Controller
{
    public function propertyListBeforeLogin() {
        return view('property');
    }

    public function propertyListAfterLogin() {
        return view('propertylogin');
    }
}
