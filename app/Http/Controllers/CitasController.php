<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Vehicle;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Asegúrate de importar la clase Auth


class CitasController extends Controller
{
    public function index()
    {
        $citas = Cita::with(['vehicle', 'service'])->get();
        return view('usuario.citas.index', compact('citas'));
    }

    public function create()
    {
        $vehicles = Vehicle::all();
        $services = Service::all();
        return view('usuario.citas.create', compact('vehicles', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_vh' => 'required',
            'id_servicio' => 'required',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required|date_format:H:i',
        ]);

        $data = $request->all();
        $data['id_usuario'] = Auth::id();

        Cita::create($data);

        return redirect()->route('usuario.citas.index')->with('success', 'Cita creada con éxito.');
    }

    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        $vehicles = Vehicle::all();
        $services = Service::all();
        return view('usuario.citas.edit', compact('cita', 'vehicles', 'services'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_vh' => 'required|exists:vehicles,id',
            'id_servicio' => 'required|exists:services,id',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required|date_format:H:i',
        ]);
    
        $cita = Cita::findOrFail($id);
        $cita->id_vh = $request->id_vh;
        $cita->id_servicio = $request->id_servicio;
        $cita->fecha_cita = $request->fecha_cita;
        $cita->hora_cita = $request->hora_cita;
        $cita->save();
    
        return redirect()->route('usuario.citas.index')->with('success', 'Cita actualizada con éxito.');
    }
    
    


    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();

        return redirect()->route('usuario.citas.index')->with('success', 'Cita eliminada con éxito.');
    }
}
