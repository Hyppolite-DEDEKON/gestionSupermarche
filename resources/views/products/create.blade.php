@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Ajouter produit</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nom_du_produit" class="form-control" placeholder="Nom du produit">
            </div>
            <div class="col">
                <input type="text" name="fournisseurs" class="form-control" placeholder="Fournisseurs">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="quantite" class="form-control" placeholder="Quantite">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="seuil" class="form-control" placeholder="Seuil">
            </div>
            <div class="col">
                <input class="form-control" name="categorie" placeholder="Categories"></input>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </form>
@endsection