@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Transferencia</h3>
      </div>

      <div class="panel-body">
        <div class="row">
          <div class="col-xs-12">
            <form enctype="multipart/form-data" method="post" action="{{ route( 'transferencias.update', [ $transferencia->id ] ) }}">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="put">

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="{{ $transferencia->nombre }}"
                    value ="{{ $transferencia->nombre }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="apellido">Apellido</label>
                  <input type="text" class="form-control" id="apellido" name="apellido"
                    placeholder="{{ $transferencia->apellido }}"
                    value="{{ $transferencia->apellido }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="n_transferencia">N° transferencias</label>
                  <input type="text" class="form-control" id="n_transferencia" name="n_transferencia"
                    placeholder="{{ $transferencia->n_transferencia }}"
                    value="{{ $transferencia->n_transferencia }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="email" class="form-control" id="correo" name="correo"
                    placeholder="{{ $transferencia->correo }}"
                    value="{{ $transferencia->correo }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="monto">Monto</label>
                  <input type="text" class="form-control" id="monto" name="monto"
                    placeholder="{{ $transferencia->monto }}"
                    value="{{ $transferencia->monto }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <input type="text" class="form-control" id="fecha" name="fecha"
                    placeholder="{{ $transferencia->fecha }}"
                    value="{{ $transferencia->fecha }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="condicion">Condicion</label>
                  <select class="form-control" id="condicion" name="condicion">
                    <option value="{{ $transferencia->condicion }}">{{ $transferencia->condicion }}</option>
                    <option value="En proceso">En proceso</option>
                    <option value="Completado">Completado</option>
                  </select>
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="codigo">Codigo</label>
                  <input type="text" class="form-control" id="codigo" name="codigo"
                    placeholder="{{ $transferencia->codigo }}"
                    value=" {{ $transferencia->codigo }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="img_transferencia">Imagen de la transferencia</label>
                  <input  type="file" class="form-control" id="img_transferencia" name="img_transferencia"
                    value=" {{ $transferencia->img_transferencia }}"
                  >
                </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <button type="submit" class="btn btn-success" value="submit"><i class="icon ion-edit"></i> Modificar</button>
              </div>
            </form>

            <div class="col-xs-12 col-md-6">
              <a href="#" class="btn btn-danger" onClick="remove()"><i class="icon ion-trash-a"></i> Eliminar</a>
              <form id="delete-form" action="{{ route('transferencias.destroy', [$transferencia->id])}}" method="POST" style="display:none">
                <input type="hidden" name="_method" value="delete">
                {{csrf_field()  }}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
