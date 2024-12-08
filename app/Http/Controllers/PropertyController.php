<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    public function agentProperty()
    {
        $id = session('user_id');

        // find agent
        $agent = AppUser::find($id)->where('is_agent', true)->first();
        if ($agent) {
            $properties = Property::where('user_id', $id)->get();

            return view('agent-property', compact('properties'));
        }
        // User is not an agent
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }

    public function editmyproperty()
    {
        return view('editmyproperty');
    }

    public function deleteProperty($id)
    {
        $property = Property::find($id);
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found.');
        }

        $role = AppUser::where('user_id', $property->user_id)->value('is_agent');

        if ($property->user_id != session('user_id') && !$role) {
            return redirect()->back()->with('error', 'You do not have permission to delete this property.');
        }
        if ($property->picture_path && Storage::exists($property->picture_path)) {
            Storage::delete($property->picture_path);
        }

        // // Delete the property
        $property->delete();
        return redirect()->back()->with('success', 'Property deleted successfully.');
    }
    public function addmyproperty()
    {
        return view('addproperty');

    }
}
