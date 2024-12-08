<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
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

    public function agentProperty()
    {
        $id = session('user_id');

        // find agent
        $agent = AppUser::find($id)->where('is_agent', true)->first();
        if ($agent) {
            $properties = Property::where('user_id', $id)->get();

            if ($properties->isNotEmpty()) {
                return view('agent-property', compact('properties'));
            }
            return redirect()->redirect()->with('error', 'There are no properties registered, please add one first.');
        }
        // User is not an agent
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }

    public function editmyproperty()
    {
        return view('editmyproperty');
    }
}
