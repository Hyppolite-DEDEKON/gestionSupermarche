@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Detail Fournisseur</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nom du fournisseur</label>
            <input type="text" name="nom_du_fournisseur" class="form-control" placeholder="Nom du fournisseur" value="{{ $fournisseur->nom_du_fournisseur }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ $fournisseur->adresse }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $fournisseur->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control" placeholder="Telephone" value="{{ $fournisseur->telephone }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Date d'enregistrement</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $fournisseur->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Date de modification</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $fournisseur->updated_at }}" readonly>
        </div>
    </div>
@endsection