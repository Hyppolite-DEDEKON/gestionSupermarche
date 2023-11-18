@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Detail Agent</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nom du cassier(e)</label>
            <input type="text" name="nom_du_agent" class="form-control" placeholder="Nom du cassier" value="{{ $agent->nom_du_agent }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control" placeholder="Telephone" value="{{ $agent->telephone }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ $agent->adresse }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Date d'enregistrement</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $agent->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Date de modification</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $agent->updated_at }}" readonly>
        </div>
    </div>
@endsection