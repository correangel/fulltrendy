@extends('layouts.front-end')

@section('content2')
<div class="container width-trans">
  <div class="row margin-top-t ">
    @isset($error)
      <div class="col-12 text-center">
        <div class="alert alert-danger z-depth-2">
          <p>{{ $error }}</p>
        </div>
      </div>
    @endisset

    <div style="margin-bottom: 30px" class="col-12 text-center">
      <h3 class="font-weight-bold text-general">Ingresa tu codigo para chequear tu transferencia</h3>
    </div>

    <div class="col-12 text-center">
      <form method="get" action="{{ route( 'mostrartransferencia.index') }}">
        {{ csrf_field() }}

        <div class="row">
          <div class="col-12">
            <div class="md-form">
              <input type="text" class="input-alternate" id="codigo" name="codigo" placeholder="Ingrese el codigo de la operación" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-general" value="submit">Chequear</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
