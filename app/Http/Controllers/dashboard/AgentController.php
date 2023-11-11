<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\UserType;

class AgentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $broker = request()->user()->broker()->first();
        $agents = $broker->agents()->with('user')->get();


        return view('dashboard.agents.index', compact('agents'));
    }


    public function store(CreateAgentRequest $request)
    {
        $data = $request->validated();
        $data['user_type_id'] = UserType::AGENT;
        $user = User::create($data);

        $user->agent()->create([
            'broker_id' => request()->user()->broker->id,
        ]);

        return redirect()->route('agents.index')->with('success', 'Agent created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($agentId)
    {
        $broker = request()->user()->broker()->first();
        $agent = $broker->agents()->findOrFail($agentId);
        $agent->load('user');

        return view('dashboard.agents.edit', compact('agent'));
    }


    public function update($agentId, UpdateAgentRequest $request)
    {
        $broker = request()->user()->broker()->first();
        $agent = $broker->agents()->findOrFail($agentId);
        $user = $agent->user;
        $request->validateUniqueValues($user);
        $user->update($request->validated());

        return back()->with('success', 'agent data updated successfully');
    }


    public function destroy($agentId)
    {
        $broker = request()->user()->broker()->first();
        $agent = $broker->agents()->findOrFail($agentId);
        $agent->user->delete();

        return back()->with('success', 'agent deleted successfully');
    }
}
