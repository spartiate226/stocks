@extends('layout.dashboard')

@section('dashboard-content')
    <div>
        <table class="table table-bordered table-striped">
            <thead>
            <th>Nº</th>
            <th>Produit</th>
            <th>Quantite</th>
            <th>Somme</th>
            </thead>
            <tbody>
            @foreach($ventes as $vente)
                <tr>
                    <td>{{$vente->id}}</td>
                    <td>{{$vente->Produit->nom}}</td>
                    <td>{{$vente->quantite}}</td>
                    <td>{{$vente->somme}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>

    </div>
@endsection
