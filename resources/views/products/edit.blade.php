@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Modifier produits</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom du produit</label>
                <input type="text" name="nom_du_produit" class="form-control" placeholder="Nom du produit" value="{{ $product->nom_du_produit }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Fournisseurs</label>
                <input type="text" name="fournisseurs" class="form-control" placeholder="Fournisseurs" value="{{ $product->fournisseurs }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Quantité</label>
                <input type="text" name="quantite" class="form-control" placeholder="Quantite" value="{{ $product->quantite }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Date d'enregistrement</label>
                <input class="form-control" type="date" name="date" placeholder="Date" value="{{ $product->created_at }}">
            </div>
        </div>
         <div class="row">
            <div class="col mb-3">
                <label class="form-label">Seuil</label>
                <input type="text" name="seuil" class="form-control" placeholder="Seuil" value="{{ $product->seuil }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Categorie</label>
                <input class="form-control" name="categorie" placeholder="Categories" value="{{ $product->categorie }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modifier</button>
            </div>
        </div>
    </form>
@endsection