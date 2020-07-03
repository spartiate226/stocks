<!Doctype html>
<html class="h-100">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
<body class="h-100">
   <header>
       <nav class="nav navbar bg-light border-bottom">
           <ul class="">
               <li class="list-unstyled"><a href="">Stocker</a></li>
           </ul>
           <ul class="d-flex">
               @guest()
                   <li class="list-unstyled mr-2"><a href="{{url('/')}}">Se connecter</a></li>
               @endguest
               @auth()
                   {{--<li class="list-unstyled mr-2"><a href="">Deconnexion</a></li>--}}
                       @if(Auth::User()->role==1)
                           <li class="list-unstyled mr-2"><a href="{{url('register')}}">Nouveau compte</a></li>
                       @endif
               @endauth
           </ul>
       </nav>
   </header>
   <div class="row m-0 h-100 bg-info">
       @yield('sidebare')
       <div class="col-md-10 bg-light">
           @yield('contenue')
       </div>
   </div>
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
