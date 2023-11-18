@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Enregistrer vente</h1>
    <hr />
    <form action="{{ route('ventes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="produit_id">Produit</label>
                <select name="produit_id" id="produit_id" class="form-select">
                    @foreach($produits as $id => $nom)
                        <option value="{{ $id }}">{{ $nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" placeholder="Stock">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="quantite">Quantité</label>
                <input type="number" name="quantite" id="quantite" class="form-control" placeholder="Quantité">
            </div>
            <div class="col">
                <label for="date">Date de vente</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="agent_id">Agent</label>
                <select name="agent_id" id="agent_id" class="form-select">
                    @foreach($agents as $id => $nom)
                        <option value="{{ $id }}">{{ $nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
