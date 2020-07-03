@extends('layout.app')
@section('sidebare')
    <aside class="col-md-2 p-0 bg-light">

    </aside>
@endsection
@section('contenue')
    <div class="row">
        <div class="col-md-3">

        </div>
        <form class="col-md-5 shadow m-3 p-5" action="{{url('log')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Nom utilisateur">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
            </div>
            <button class="btn btn-info">connecter</button>
        </form>
    </div>
@endsection
