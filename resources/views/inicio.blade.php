<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FullTrendy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fulltrendy z-depth-2">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo-fulltrendy.png') }}" height="60" class="d-inline-block align-top" alt="">
        <span>Full Trendy Cambio</span>
      </a>
    </nav>

    <div class="container">
      <!-- Content here -->
      <div class="row  ">
        <div class="col margin-top-g">
          <div class="card z-d">
            <!--Card content-->
            <div class="card-body">
              <div class="row margir-top-c">

                <div class="col-6 text-center">
                  <a href="{{ route( 'mostrartransferencia.create' ) }}" class="text-center btn btn-principal z-depth-3 ">iniciar</a>
                  <p class="text-center text-purple-p">Operación</p>
                </div>

                <div class="col-6 text-center">
                  <a href="/consultar" class="btn btn-principal2 z-depth-3 ">chequear</a>
                  <p class="text-center text-purple-p">Estado de tramite</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/pooper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>

  </body>
</html>
