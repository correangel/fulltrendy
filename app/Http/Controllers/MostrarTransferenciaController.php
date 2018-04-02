<?php

namespace App\Http\Controllers;

use App\Transferencia;
use Illuminate\Http\Request;

class MostrarTransferenciaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $codigo = $request->input('codigo');
    $transferencia = Transferencia::where('codigo', $codigo)->first();

    if ($transferencia) {
      return view('mostrartransferencia.show', ['transferencia' => $transferencia]);
    }else {
      $error = 'El codigo introducido es incorrecto';
      return view('consultar-transferencia', ['error' => $error]);
    }
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('mostrartransferencia.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $codigo = "";
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    //aquí podemos incluir incluso caracteres especiales pero cuidado con las ‘ y “ y algunos otros
    $length = 10;
    $max = strlen($caracteres) - 1;

    for ($i=0;$i<$length;$i++) {
      $codigo .= substr($caracteres, rand(0, $max), 1);
    }

    $rules = [
      'nombre' => 'required|max:30|alpha',
      'apellido' => 'required|max:30|alpha',
      'n_transferencia' => 'required|integer',
      'correo' => 'required|min:10|max:30|email',
      'monto' => 'required|',
      'fecha' => 'required',
    ];

    $messages = [
      'nombre.alpha' => 'Esta colocando el :attribute en numeros.',
      'nombre.max' => 'El maximo del :attribute es de 30 letras.',
      'apellido.alpha' => 'Esta colocando el :attribute en numeros.',
      'apellido.max' => 'El maximo del :attribute es de 30 letras.',
      'n_transferencia.integer' => 'El numero de la transferencia debe ser entero.',
      'correo.min' => 'El minino del :attribute es de 10 letras.',
      'correo.max' => 'El maximo del :attribute es de 30 letras.',
    ];

    $this->validate($request, $rules, $messages);

    $transferencia = Transferencia::create([
      'nombre' => $request->input('nombre'),
      'apellido' => $request->input('apellido'),
      'n_transferencia' => $request->input('n_transferencia'),
      'correo' => $request->input('correo'),
      'monto' => $request->input('monto'),
      'fecha' => $request->input('fecha'),
      'condicion' => 'En espera',
      'codigo' => $codigo
    ]);

    if ( $transferencia ) {
      return view('transferencia-registrada', ['codigo' => $codigo]);
    } else {
      return view('/');
    }
  }
}
