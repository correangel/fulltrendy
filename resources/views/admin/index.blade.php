@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Transferencias</h3>
      </div>

      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>N° de Transferencias</th>
                <th>Correo</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Condicion</th>
                <th>imagen</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>
              @foreach( $transferencias as $transferencia)
                <tr>
                  <td>{{ $transferencia ->nombre }}</td>
                  <td>{{ $transferencia ->apellido }}</td>
                  <td>{{ $transferencia ->n_transferencia }}</td>
                  <td>{{ $transferencia ->correo }}</td>
                  <td>{{ $transferencia ->monto }}</td>
                  <td>{{ $transferencia ->fecha }}</td>
                  <td>{{ $transferencia ->condicion }}</td>
                  <td><img width="50px" class="img-rounded img-responsive" src="{{ Storage::url($transferencia ->img_transferencia)}}" alt=""></td>
                  <td>
                    <a href="/transferencias/{{ $transferencia->id }}/edit"><i class="icon ion-edit"></i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
