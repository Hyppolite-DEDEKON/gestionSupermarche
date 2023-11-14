@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nom du produits</label>
            <input type="text" name="nom_du_produit" class="form-control" placeholder="Nom du produit" value="{{ $product->nom_du_produit }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Fournisseurs</label>
            <input type="text" name="fournisseurs" class="form-control" placeholder="Fournisseurs" value="{{ $product->fournisseurs }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Quantite</label>
            <input type="text" name="quantite" class="form-control" placeholder="Quantite" value="{{ $product->quantite }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Date d'enregistrement</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Seuil</label>
            <input type="text" name="seuil" class="form-control" placeholder="Seuil" value="{{ $product->seuil }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Categorie</label>
            <input class="form-control"  name="categorie" placeholder="Categorie"  value="{{ $product->categorie }}" readonly>
        </div>
    </div>
    <div class="row">
        
        <div class="col mb-3">
            <label class="form-label">Date de modification</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection