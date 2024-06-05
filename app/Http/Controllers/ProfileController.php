<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Hash;
class ProfileController extends Controller
{
    public function index ()
    {
       
        return view('usuario.profile');
    }

    public function updateProfile (Request $request)
    {
       
        $user = Auth::user();

        if($request->hasFile('image')){

            if(File::exists(public_path($user->image)) && $user->image != 'uploads/default.jpg'){
                File::delete(public_path($user->image));


            }
            $image = $request->image;
            $imageName = rand().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'),$imageName);
            $path = "/uploads/".$imageName;
            $user->image = $path;

        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;


       
        $user->save();

        return redirect()->back();

    }

    public function updatePassword(Request $request)
{
    $user = auth()->user();

    // Validar las contraseñas
    $request->validate([
        'current_password' => ['required'],
        'password' => ['required', 'confirmed', 'min:8'],
    ]);

    // Verificar si la contraseña actual es correcta
    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'La contraseña actual es incorrecta.']);
    }

    // Verificar si la nueva contraseña es igual a la actual
    if (Hash::check($request->password, $user->password)) {
        return redirect()->back()->withErrors(['password' => 'La nueva contraseña no puede ser igual a la contraseña actual.']);
    }

    // Actualizar la contraseña
    $user->update([
        'password' => bcrypt($request->password),
    ]);

    // Redirigir con notificación de éxito
    return redirect()->back()->with('notification', 'La contraseña se ha actualizado correctamente.');
}

}
