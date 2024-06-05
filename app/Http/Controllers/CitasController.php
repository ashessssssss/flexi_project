<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CitasController extends Controller
{
    public function cita()
    {
        return view('usuario.citas');
    }

    public function updateCita(Request $request)
    {
        $appoiment = Auth::appoiment();

        $appoiment->id_cliente = $request->id_cliente;
        $appoiment->id_servicio = $request->id_servicio;
        $appoiment->fecha_cita = $request->fecha_cita;
        $appoiment->hora_cita = $request->hora_cita;
        $appoiment->id_empleado = $request->id_empleado;
        $appoiment->id_prod = $request->id_prod;

        $appoiment->save();

        return redirect()->back();











    }
}
