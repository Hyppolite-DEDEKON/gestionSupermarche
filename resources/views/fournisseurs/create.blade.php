@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Ajouter fournisseur</h1>
    <hr />
    <form action="{{ route('fournisseurs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nom_du_fournisseur" class="form-control" placeholder="Nom du fournisseur">
            </div>
            <div class="col">
                <input type="text" name="adresse" class="form-control" placeholder="Adresse">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="telephone" class="form-control" placeholder="Telephone">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </form>
@endsection