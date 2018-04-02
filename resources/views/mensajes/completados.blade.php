@if ( session() -> has('completado') )
<div class="alert alert-success alert-dismissible " role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>
    {{  session() -> get('completado') }}
  </strong>
</div>
@endif
