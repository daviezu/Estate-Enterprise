<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::limit(6)->get();
        return view('home', compact('properties'));
    }

    public function searchByAddress(Request $request) {
        
    }
}
