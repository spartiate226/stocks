@extends('layout.app')
@section('sidebare')
    <aside class="col-md-2 p-0">
        <ul class="p-0 bg-info">
            @if(Auth::User()->role==1)
                <li  class=" list-unstyled bg-light border-bottom text-center text-uppercase"><a style="color:white!important;" href="{{url('stock')}}" class="bg-info d-block w-100 h-100">Stocks</a></li>
            @endif
            <li  class=" list-unstyled bg-light border-bottom text-center text-uppercase"><a style="color:white!important;" href="{{url('vente')}}" class="bg-info d-block w-100 h-100">Ventes</a></li>
                <li  class=" list-unstyled bg-light border-bottom text-center text-uppercase"><a style="color:white!important;" href="{{url('produit')}}" class="bg-info d-block w-100 h-100">Produits</a></li>
        </ul>
    </aside>
@endsection
@section('contenue')
@yield('dashboard-content')
@endsection
