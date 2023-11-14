@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Modifier fournisseur</h1>
    <hr />
    <form action="{{ route('fournisseurs.update', $fournisseur->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom du fournisseur</label>
                <input type="text" name="nom_du_fournisseur" class="form-control" placeholder="Nom du fournisseur" value="{{ $fournisseur->nom_du_fournisseur }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ $fournisseur->adresse }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $fournisseur->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Telephone</label>
                <input class="form-control" name="telephone" placeholder="Telephone" value="{{ $fournisseur->telephone }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modifier</button>
            </div>
        </div>
    </form>
@endsection