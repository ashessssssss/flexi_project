<!-- resources/views/profile/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Perfil</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="cedula_per">Cédula</label>
            <input type="text" name="cedula_per" class="form-control" value="{{ old('cedula_per', $person->cedula_per) }}" required>
        </div>

        <div class="form-group">
            <label for="nombre_per">Nombre</label>
            <input type="text" name="nombre_per" class="form-control" value="{{ old('nombre_per', $person->nombre_per) }}" required>
        </div>

        <div class="form-group">
            <label for="apellido_per">Apellido</label>
            <input type="text" name="apellido_per" class="form-control" value="{{ old('apellido_per', $person->apellido_per) }}" required>
        </div>

        <div class="form-group">
            <label for="sexo_per">Sexo</label>
            <select name="sexo_per" class="form-control" required>
                <option value="male" {{ old('sexo_per', $person->sexo_per) == 'male' ? 'selected' : '' }}>Masculino</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_nac_per">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nac_per" class="form-control" value="{{ old('fecha_nac_per', $person->fecha_nac_per) }}" required>
        </div>

        <div class="form-group">
            <label for="telefono_per">Teléfono</label>
            <input type="text" name="telefono_per" class="form-control" value="{{ old('telefono_per', $person->telefono_per) }}" required>
        </div>

        <div class="form-group">
            <label for="correo_per">Correo</label>
            <input type="email" name="correo_per" class="form-control" value="{{ old('correo_per', $person->correo_per) }}" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <textarea name="direccion" class="form-control" required>{{ old('direccion', $person->direccion) }}</textarea>
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" class="form-control">
            @if ($user->avatar)
                <img src="{{ Storage::url($user->avatar) }}" alt="Avatar" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
    </form>
</div>
@endsection
