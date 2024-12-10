<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agentList(Request $request)
    {
        $search = $request->input('search');

       
        $agents = AppUser::where('is_agent', true)
            ->when($search, function ($query, $search) {
                $query->where('fullname', 'like', '%' . $search . '%'); 
            })
            ->simplePaginate(8) 
            ->withQueryString(); 

        return view('agentlist', compact('agents', 'search'));
    }


    public function agentDetail($user_id) 
    {
        
        $agent = AppUser::where('user_id', $user_id)->where('is_agent', true)->firstOrFail();

    
        if (!$agent) {
            return redirect()->route('agent.list')->with('error', 'Agent not found or not valid.');
        }

        $properties = $agent->UserToProperty()->get();

        return view("agentdetail", compact("properties", "agent"));


    }
}
