<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PIPA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
    <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">PIPA</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/register">Register</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="/register">Register</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons ">menu</i></a>
    </div>
   </nav>
     @yield('content')
  </body>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{URL::asset('js/init.js')}}"></script>
</html>
