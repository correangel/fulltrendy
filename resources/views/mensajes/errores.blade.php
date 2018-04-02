@if ( isset( $errores ) && count( $errores ) > 0 )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  @foreach ( $errores -> all() as $error )
    <li><strong> {{ $error }} </strong></li>
  @endforeach
</div>
@endif
