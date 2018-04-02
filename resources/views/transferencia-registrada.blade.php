@extends('layouts.front-end')

@section('content2')
<div class="container width-trans">
  <div class="row margin-top-t ">
    <div class="col-12 text-center">
      <h3 class="font-weight-bold text-general">¡Tu operación ha sido registrada exitosamente!</h3>
    </div>

    <div class="col-12 text-center">
      <p class="text-general">Te avísaremos al momento de comprobar los datos recuerda estar chequeando el avance de la operación</p>
    </div>

    <div class="col-12 text-center">
      <p class="font-weight-bold text-alternative">Nro de la operación {{ $codigo }} </p>
    </div>

    <div class="col-12 text-center">
      <a href="{{ route( 'mostrartransferencia.create' ) }}" class="btn btn-operacion z-depth-1 "><i class="fa fa-plus"></i></a>
      <br>
      <h5 class="text-general">Iniciar nueva operación</h5>
    </div>

  </div>
</div>
@endsection
