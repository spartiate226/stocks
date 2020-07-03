@extends('layout.dashboard')

@section('dashboard-content')
    <div>
        <table class="table table-bordered table-striped">
            <thead>
            <th>Nº</th>
            <th>Produit</th>
            <th>Quantite</th>
            <th></th>
            </thead>
            <tbody>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{$stock->id}}</td>
                    <td>{{$stock->Produit->nom}}</td>
                    <td>{{$stock->quantite}}</td>
                    <td>
                        <button type="button" data-toggle="modal" data-target="#stock{{$stock->id}}" class="badge badge-info">Ajouter</button>
                    </td>
                </tr>
                <div class="modal fade" id="stock{{$stock->id}}" tabindex="-1" role="dialog" aria-labelledby="stock{{$stock->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Aprovisionnement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('stock_save')}}" method="post">
                                    @csrf
                                    <input hidden type="number" value="{{$stock->id}}" name="id">
                                    <div class="form-group">
                                        <label>Quantite</label>
                                        <input class="form-control" type="number" name="quantite">
                                    </div>
                                    <button class="btn btn-success" type="submit">Changer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            </tbody>
        </table>
        <div>{{$stocks->links()}}</div>
    </div>
    <div>

    </div>
@endsection
