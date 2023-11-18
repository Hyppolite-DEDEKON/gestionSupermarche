
@extends('layouts.app')

@section('contents')
    <h1>Résultats de la recherche pour "{{ $query }}"</h1>

    @if($products->count() > 0)
        <ul>
            @foreach($products as $product)
                <li>{{ $product->nom_du_produit }}</li>
            @endforeach
        </ul>
    @else
        <p>Aucun résultat trouvé.</p>
    @endif
@endsection
