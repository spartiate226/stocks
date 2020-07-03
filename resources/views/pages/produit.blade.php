@extends('layout.dashboard')

@section('dashboard-content')
<div>
    <table class="table table-bordered table-striped">
        <thead>
           <th>Nº</th>
           <th>Nom</th>
           <th>Categorie</th>
           <th>Stock</th>
           <th>Prix</th>
           <th>Option</th>
        </thead>
        <tbody>
           @foreach($produits as $produit)
               <tr>
                   <td>{{$produit->id}}</td>
                   <td>{{$produit->nom}}</td>
                   <td>{{$produit->Categorie->intitule}}</td>
                   <td>{{$produit->Stock->quantite}}</td>
                   <td>{{$produit->prix}}</td>
                   <td>
                       @if ($produit->Stock->quantite!=0)
                       <button type="button" data-toggle="modal" data-target="#vente{{$produit->id}}" class="badge badge-info">Vendre</button></td> 
                       @endif
               </tr>
               <div class="modal fade" id="vente{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="vente{{$produit->id}}" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title">Vente du produit {{$produit->nom}}</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                           </div>
                           <div class="modal-body">
                               <form class="" action="{{url('vente_save')}}" method="post">
                                   @csrf
                                   <input hidden type="number" value="{{$produit->id}}" name="produit_id">
                                   <div class="form-group">
                                       <label>Quantite</label>
                                       <input class="form-control" type="number" value="0" name="quantite">
                                   </div>
                                   <button class="btn btn-success" type="submit">Vendre</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           @endforeach
        </tbody>
    </table>
    <div>{{$produits->links()}}</div>


    @if(Auth::User()->role==1)
        <div>
            <form action="{{url('produit_save')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control" type="text" name="nom">
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input class="form-control" type="number" name="prix">
                </div>
                <div class="form-group">
                    <label>Categorie</label>
                    <select name="categorie_id" class="form-control">
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->intitule}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantite</label>
                    <input class="form-control" type="number" name="quantite">
                </div>
                <button class="btn btn-success" type="submit">Ajouter</button>
            </form>
        </div>
    @endif
</div>
<div>

</div>
@endsection
