<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Vehicle;
use App\Models\Service;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CitasController extends Controller
{
    public function index()
    {
        $citas = Cita::where('id_usuario', Auth::id())->get();
        return view('usuario.citas.index', compact('citas'));
    }

    public function create()
    {
        $vehicles = Vehicle::where('id_usuario', Auth::id())->get();
        $services = Service::all();
        $products = Product::all();
        $workers = User::where('role', 'worker')->get();
        return view('usuario.citas.create', compact('vehicles', 'services', 'products', 'workers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_vh' => 'required|exists:vehicles,id',
            'id_servicio' => 'required|exists:services,id',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required|date_format:H:i',
            'id_empleado' => 'required|exists:users,id',
            'estado_cita' => 'required|in:EN PROCESO,COMPLETADA,CANCELADA',
            'id_prod' => 'required|exists:products,id',
        ]);

        $cita = new Cita();
        $cita->id_usuario = Auth::id();
        $cita->id_vh = $request->id_vh;
        $cita->id_servicio = $request->id_servicio;
        $cita->fecha_cita = $request->fecha_cita;
        $cita->hora_cita = $request->hora_cita;
        $cita->id_empleado = $request->id_empleado;
        $cita->estado_cita = $request->estado_cita;
        $cita->id_prod = $request->id_prod;
        $cita->save();

        return redirect()->route('usuario.citas.index')->with('success', 'Cita creada exitosamente');
    }

    public function edit($id)
    {
        $cita = Cita::find($id);
        $vehicles = Vehicle::where('id_usuario', Auth::id())->get();
        $services = Service::all();
        $products = Product::all();
        $workers = User::where('role', 'worker')->get();
        return view('usuario.citas.edit', compact('cita', 'vehicles', 'services', 'products', 'workers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_vh' => 'required|exists:vehicles,id',
            'id_servicio' => 'required|exists:services,id',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required|date_format:H:i',
            'id_empleado' => 'required|exists:users,id',
            'estado_cita' => 'required|in:EN PROCESO,COMPLETADA,CANCELADA',
            'id_prod' => 'required|exists:products,id',
        ]);

        $cita = Cita::find($id);
        $cita->id_vh = $request->id_vh;
        $cita->id_servicio = $request->id_servicio;
        $cita->fecha_cita = $request->fecha_cita;
        $cita->hora_cita = $request->hora_cita;
        $cita->id_empleado = $request->id_empleado;
        $cita->estado_cita = $request->estado_cita;
        $cita->id_prod = $request->id_prod;
        $cita->save();

        return redirect()->route('usuario.citas.index')->with('success', 'Cita actualizada exitosamente');
    }

    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();

        return redirect()->route('usuario.citas.index')->with('success', 'Cita eliminada exitosamente');
    }
}
