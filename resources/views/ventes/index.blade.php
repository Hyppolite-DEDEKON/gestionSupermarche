@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Ventes</h1>
        <a href="{{ route('ventes.create') }}" class="btn btn-primary">Nouveau</a>
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
                <th>Stock</th>
                <th>Quantité</th>
                <th>Date de la vente</th>
                <th>Nom de l'agent</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($vente->count() > 0)
                @foreach($vente as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->products->nom_du_produit }}</td>
                        <td class="align-middle">{{ $rs->stock }}</td>
                        <td class="align-middle">{{ $rs->quantite }}</td>
                        <td class="align-middle">{{ $rs->date }}</td>
                        <td class="align-middle">{{ $rs->agents->nom_du_agent }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('ventes.show', $rs->id) }}" type="button" class="btn btn-secondary">Détail</a>
                                <a href="{{ route('ventes.edit', $rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('ventes.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Voulez-vous vraiment supprimer cette vente?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Aucune vente trouvée</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
