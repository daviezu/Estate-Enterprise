<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agentList()
    {
        $agents = AppUser::where('is_agent', true)->get();
        return view('agentlist', compact('agents'));
    }
}
