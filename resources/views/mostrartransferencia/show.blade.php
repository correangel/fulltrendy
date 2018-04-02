@extends('layouts.front-end')

@section('content2')
<div class="container width-trans">
  <div class="row margin-top-t ">
    <div class="col-12 text-center">
      <p class="font-weight-bold  text-alternative">Tu operación ha sido aprobada, consulta tu cuenta y verífica la transferencia</p>
    </div>

    <div class="col-12 text-center">
      <p class="font-weight-bold text-general">Usuario: {{ $transferencia->nombre }} </p>
      <p class="font-weight-bold text-general">Fecha: {{ $transferencia->fecha }} </p>
      <p class="font-weight-bold text-general">Monto: {{ $transferencia->monto }} </p>
      <p class="font-weight-bold text-general">Estado: {{ $transferencia->condicion }} </p>
    </div>

    @if ($transferencia ->img_transferencia)
      <div class="col-12">
        <div class="hm-zoom">
          <a href="{{ Storage::url($transferencia ->img_transferencia)}}" data-fancybox="gallery" data-caption="My caption">
            <img src="{{ Storage::url($transferencia ->img_transferencia)}}" class="z-depth-3 img-fluid " alt="Responsive image">
          </a>
        </div>
      </div>
    @endif
  </div>
</div>
@endsection
