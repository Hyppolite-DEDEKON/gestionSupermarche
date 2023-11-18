<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $agent = Agent::orderBy('created_at', 'DESC')->get();
  
        return view('agents.index', compact('agent'));

    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agents.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Agent::create($request->all());
 
        return redirect()->route('agents')->with('success', 'Agent ajouté avec succes');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agent = Agent::findOrFail($id);
  
        return view('agents.show', compact('agent'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agent = Agent::findOrFail($id);
  
        return view('agents.edit', compact('agent'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agent = Agent::findOrFail($id);
  
        $agent->update($request->all());
  
        return redirect()->route('agents')->with('success', 'Agent modifié avec succes');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agent = Agent::findOrFail($id);
  
        $agent->delete();
  
        return redirect()->route('agents')->with('success', 'Agent supprimé avec succes');
    }
}
