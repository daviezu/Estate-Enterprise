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
        $properties = Property::with('PropertyToAgent')
        ->simplePaginate(5)
        ->withQueryString();


        return view('property', compact('properties'));
    }

    public function propertyDetail($slug)
    {
        $property = Property::where('slug', $slug)->firstOrFail();
        return view('detailproperty', compact("property"));
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

    public function getPropertyByAgent($user_id) : View
    {
        $agent = AppUser::where("user_id", $user_id)    ->where("is_agent", true)->firstOrFail();

        $properties = $agent->UserToProperty();

        return view("agentdetail", compact("properties", "agent"));
    }

    public function editPropertyIndex()
    {
        return view('editmyproperty');
    }

    public function editProperty() {}

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

    public function addPropertyIndex()
    {
        return view('addproperty');
    }

    public function addProperty(Request $request)
    {
        // Validate the request data
        $validate = $request->validate([
            'property_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'location_link' => 'nullable|url',
            'building_size' => 'required|numeric|min:0',
            'land_size' => 'required|numeric|min:0',
            'certificate' => 'required|string|max:255',
            'bedroom' => 'required|integer|min:0',
            'bathroom' => 'required|integer|min:0',
            'carport' => 'required|integer|min:0',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the picture if uploaded
        $picturePath = null;
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('images/properties', 'public');
        }
        $userId = session('user_id');
        // Create a new property
        Property::create([
            'user_id' => $userId,
            'property_name' => $validate['property_name'],
            'description' => $validate['description'],
            'address' => $validate['address'],
            'price' => $validate['price'],
            'location_link' => $validate['location_link'],
            'building_size' => $validate['building_size'],
            'land_size' => $validate['land_size'],
            'certificate' => $validate['certificate'],
            'bedroom' => $validate['bedroom'],
            'bathroom' => $validate['bathroom'],
            'carport' => $validate['carport'],
            'picture_path' => $picturePath,
        ]);
        // Redirect to a success page or back
        return redirect()->route('agent.property')->with('success', 'Property added successfully!');
    }
}
