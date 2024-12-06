<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PropertyController extends Controller
{



    public function propertyList()
    {
        $properties = Property::all();
        return view('property', compact('properties'));
    }

    public function propertyDetail()
    {

        return view('detailproperty');
    }
}
