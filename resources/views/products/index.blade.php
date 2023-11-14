@extends('layouts.app')
  

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listes des Produits</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Nouveau</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nom du produit</th>
                <th>Fournisseurs</th>
                <th>Quantité</th>
                <th>Date d'enregistrement</th>
                <th>Seuil</th>
                <th>Categories</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nom_du_produit }}</td>
                        <td class="align-middle">{{ $rs->fournisseurs }}</td>
                        <td class="align-middle">{{ $rs->quantite }}</td>
                        <td class="align-middle">{{ $rs->created_at }}</td> 
                        <td class="align-middle">{{ $rs->seuil }}</td> 
                        <td class="align-middle">{{ $rs->categorie }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Voulez-vous vraiment supprimé ce produit?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection