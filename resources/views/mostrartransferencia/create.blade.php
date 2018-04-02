@extends('layouts.front-end')

@section('content')
<div style="margin-top: 20px" class="col-12">
  @if ($errors->any())
    <div class="alert alert-danger z-depth-2">
      <ul>
        @foreach ($errors->all() as $messages)
          <li>{{ $messages }}</li>
        @endforeach
      </ul>
    </div>
  @endif
</div>

<div class="row margin-top-t">
  <div class="col-12 col-md-6">
    <h1 class="text-big text-center">Operación</h1>
    <form method="post" action="{{ route( 'mostrartransferencia.store' ) }}">

      {{ csrf_field() }}

      <div class="row">
        <div class="col-6">
          <div class="md-form">
            <input type="text" class="input-alternate" id="nombre" name="nombre" placeholder="Nombre" required>
          </div>
        </div>

        <div class="col-6">
          <div class=" md-form">
            <input type="text" class="input-alternate" id="apellido" name="apellido" placeholder="Apellido" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="md-form">
            <input type="text" class="input-alternate v-2" id="n_transferencia" name="n_transferencia" placeholder="Número de transferencia" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="md-form ">
            <input type="email" class="input-alternate v-2" id="correo" name="correo" placeholder="Correo Electrónico" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-8">
          <div class="md-form ">
            <input type="text" class="input-alternate z-depth-2 v-2" id="monto" name="monto" placeholder="Monto" required>
          </div>
        </div>

        <div class="col-4">
          <div class="md-form ">
            <input type="date" class="z-depth-2 input-alternate v-3" id="fecha" name="fecha" placeholder="Fecha" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-general" value="submit">Enviar</button>
        </div>
      </div>
    </form>
  </div>

  <div class="hidden-movil col-12 col-md-6">
    <div class="row">
      <div class="col-12">
        <div class="flex-co">
          <ul class="list-g">
            <li class="item-list text-general">1. Completa la información del formulario</li>
            <li class="item-list text-general">2. Dale click al boton de ENVIAR</li>
            <li class="text-general">3. Guarda el número de la operación</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
