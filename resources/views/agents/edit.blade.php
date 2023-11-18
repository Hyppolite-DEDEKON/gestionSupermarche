@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Modifier agent</h1>
    <hr />
    <form action="{{ route('agents.update', $agent->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom du cassier(e)</label>
                <input type="text" name="nom_du_agent" class="form-control" placeholder="Nom du agent" value="{{ $agent->nom_du_agent }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Telephone</label>
                <input type="text" name="telephone" class="form-control" placeholder="Telephone" value="{{ $agent->telephone }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Adresse</label>
                <input class="form-control" name="adresse" placeholder="Adresse" value="{{ $agent->adresse }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modifier</button>
            </div>
        </div>
    </form>
@endsection