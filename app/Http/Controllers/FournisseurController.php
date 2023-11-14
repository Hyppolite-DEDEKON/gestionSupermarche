<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fournisseur = Fournisseur::orderBy('created_at', 'DESC')->get();
  
        return view('fournisseurs.index', compact('fournisseur'));

    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fournisseurs.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Fournisseur::create($request->all());
 
        return redirect()->route('fournisseurs')->with('success', 'Fournisseur ajouté avec succes');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
  
        return view('fournisseurs.show', compact('fournisseur'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
  
        return view('fournisseurs.edit', compact('fournisseur'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
  
        $fournisseur->update($request->all());
  
        return redirect()->route('fournisseurs')->with('success', 'Fournisseur modifié avec succes');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
  
        $fournisseur->delete();
  
        return redirect()->route('fournisseurs')->with('success', 'Fournisseur supprimé avec succes');
    }
}
