<?php

namespace App\Http\Controllers;

use App\Transferencia;
use Illuminate\Http\Request;

class TransferenciasController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Display a listing of the resource.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $Transferencias = Transferencia::all();
    return view('admin.index', ['transferencias' => $Transferencias]);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Transferencia  $transferencia
  * @return \Illuminate\Http\Response
  */
  public function edit(Transferencia $transferencia)
  {
    $transferencia = Transferencia::find($transferencia->id);
    return view('admin.edit', ['transferencia' => $transferencia]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Transferencia  $transferencia
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Transferencia $transferencia)
  {
    if ($request->hasFile('img_transferencia') ){
      $imagen = $request->file('img_transferencia')->store('public');
    }else {
      $transferenciaImg = Transferencia::find($transferencia->id);
      $imagen = $transferenciaImg->img_transferencia;
    }

    // Guardar datos
    $transferenciaUpdate = Transferencia::where('id', $transferencia->id)->update([
      'nombre' => $request->input('nombre'),
      'apellido' => $request->input('apellido'),
      'n_transferencia' => $request->input('n_transferencia'),
      'correo' => $request->input('correo'),
      'monto' => $request->input('monto'),
      'fecha' => $request->input('fecha'),
      'condicion' => $request->input('condicion'),
      'codigo' => $request->input('codigo'),
      'img_transferencia' => $imagen,
    ]);

    if ( $transferenciaUpdate ) {
      return redirect()->route('admin.index')->with('completado', 'La transferencia ha sido Modificada');
    }

    //redireccionar
    return back()->withInput();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Transferencia  $transferencia
  * @return \Illuminate\Http\Response
  */
  public function destroy(Transferencia $transferencia)
  {
    $transferenciaBorrar = Transferencia::find($transferencia->id);

    if ( $transferenciaBorrar->delete() ) {
      return redirect()->route('admin.index')->with('completado', 'La transferencia ha sido eliminada');
    }

    return back()->withInput()->with('errores', 'ha ocurrido un error y no se pudo eliminar la transferencia');
  }
}
