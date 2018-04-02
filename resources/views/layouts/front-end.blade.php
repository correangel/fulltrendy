<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <title>FullTrendy</title>

    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fulltrendy z-depth-2 ">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('img/logo-fulltrendy.png') }}" height="60" class="d-inline-block align-top" alt="">
        <span>FullTrendy Cambio</span>
      </a>
      <a class="text-general" href="/"><< Volver</a>
    </nav>

    @yield('content2')

    <div class="container">
      @yield('content')
    </div>


    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/pooper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
