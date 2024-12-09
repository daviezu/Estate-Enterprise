<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::All();
        return view('home', compact('properties'));
    }

    public function searchByAddress(Request $request) {
        
    }
}
