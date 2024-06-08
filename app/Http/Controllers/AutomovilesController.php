<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;
use File;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AutomovilesController extends Controller
{
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('usuario.automoviles.create', compact('brands', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricula' => 'required|string|max:20|unique:vehicles,matricula',
            'id_marca' => 'required|exists:brands,id',
            'modelo' => 'required|string|max:191',
            'año_salida_vh' => 'required|integer',
            'color_vh' => 'required|string|max:191',
            'kilometraje' => 'required|integer',
            'cilindros' => 'required|integer',
            'id_categoria' => 'required|exists:categories,id',
            'image' => 'required|image|max:2048',
        ]);

        $vehicle = new Vehicle();
        $vehicle->id_usuario = Auth::id();
        $vehicle->matricula = $request->matricula;
        $vehicle->id_marca = $request->id_marca;
        $vehicle->modelo = $request->modelo;
        $vehicle->año_salida_vh = $request->año_salida_vh;
        $vehicle->color_vh = $request->color_vh;
        $vehicle->kilometraje = $request->kilometraje;
        $vehicle->cilindros = $request->cilindros;
        $vehicle->id_categoria = $request->id_categoria;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/vehicles'), $filename);
            $vehicle->image = 'uploads/vehicles/' . $filename;
        }

        $vehicle->save();

        return redirect()->route('usuario.automoviles.index')->with('success', 'Vehículo agregado exitosamente');
    }

    public function index()
    {
        $vehicles = Vehicle::where('id_usuario', Auth::id())->get();
        return view('usuario.automoviles.index', compact('vehicles'));
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view('usuario.automoviles.edit', compact('vehicle', 'brands', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'matricula' => 'required|string|max:20|unique:vehicles,matricula',
            'id_marca' => 'required|exists:brands,id',
            'modelo' => 'required|string|max:191',
            'año_salida_vh' => 'required|integer',
            'color_vh' => 'required|string|max:191',
            'kilometraje' => 'required|integer',
            'cilindros' => 'required|integer',
            'id_categoria' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $vehicle = Vehicle::find($id);
        $vehicle->matricula = $request->matricula;
        $vehicle->id_marca = $request->id_marca;
        $vehicle->modelo = $request->modelo;
        $vehicle->año_salida_vh = $request->año_salida_vh;
        $vehicle->color_vh = $request->color_vh;
        $vehicle->kilometraje = $request->kilometraje;
        $vehicle->cilindros = $request->cilindros;
        $vehicle->id_categoria = $request->id_categoria;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/vehicles'), $filename);
            $vehicle->image = 'uploads/vehicles/' . $filename;
        }

        $vehicle->save();

        return redirect()->route('usuario.automoviles.index')->with('success', 'Vehículo actualizado exitosamente');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return redirect()->route('usuario.automoviles.index')->with('success', 'Vehículo eliminado exitosamente');
    }

    
}
