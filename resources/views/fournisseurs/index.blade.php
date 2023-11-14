@extends('layouts.app')
  

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listes des Fournisseurs</h1>
        <a href="{{ route('fournisseurs.create') }}" class="btn btn-primary">Nouveau</a>
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
                <th>Nom du fournisseur</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($fournisseur->count() > 0)
                @foreach($fournisseur as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nom_du_fournisseur }}</td>
                        <td class="align-middle">{{ $rs->adresse }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->telephone }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('fournisseurs.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('fournisseurs.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('fournisseurs.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Voulez-vous vraiment supprimé ce fournisseur?')">
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
                    <td class="text-center" colspan="5">Fournisseur not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection