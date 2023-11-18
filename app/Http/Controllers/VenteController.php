<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Product;
use App\Models\Vente;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      
    public function index()
    {
        $vente = Vente::orderBy('created_at', 'DESC')->get();
  
        return view('ventes.index', compact('vente'));

    }
  
    /**
     * Show the form for creating a new resource.
     */
   public function create()
   {
    $agents = Agent::all();
    $produits = Product::all();
    
    return view('ventes.create', compact('agents', 'produits'));
    }

  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    Vente::create($request->all());

    // Redirection vers la route 'ventes' avec un message de succès
    return redirect()->route('ventes')->with('success', 'Vente enregistrée avec succès');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $vente = Vente::findOrFail($id);
            return view('ventes.show', compact('vente'));
        } catch (ModelNotFoundException $e) {
            abort(404, 'Vente non trouvée');
        }
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vente = Vente::findOrFail($id);
  
        return view('ventes.edit', compact('vente'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vente = Vente::findOrFail($id);
  
        $vente->update($request->all());
  
        return redirect()->route('ventes')->with('success', 'Vente modifiée avec succes');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $vente = Vente::findOrFail($id);
            // Ajoutez une confirmation côté serveur si nécessaire
            $vente->delete();
            return redirect()->route('ventes')->with('success', 'Vente supprimée avec succès');
        } catch (ModelNotFoundException $e) {
            abort(404, 'Vente non trouvée');
        }
    }
}
