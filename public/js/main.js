function remove() {
  var result = confirm('¿Estas seguro que quieres eliminar esta transferencia?');
  if ( result ) {
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
}