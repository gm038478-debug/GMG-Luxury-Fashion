<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


// ===============================
// PÁGINA PRINCIPAL
// ===============================

Route::get('/', function () {
    return view('welcome');
});


// ===============================
// REGISTRAR USUARIO
// ===============================

Route::post('/register', function (Request $request) {

    $datos = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $datos['name'],
        'email' => $datos['email'],
        'password' => $datos['password'],
    ]);

    Auth::login($user);

    return redirect('/')->with(
        'success',
        'Cuenta creada correctamente.'
    );
});


// ===============================
// INICIAR SESIÓN
// ===============================

Route::post('/login', function (Request $request) {

    $datos = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt([
        'email' => $datos['email'],
        'password' => $datos['password'],
    ])) {

        $request->session()->regenerate();

        return redirect('/')->with(
            'success',
            'Sesión iniciada correctamente.'
        );
    }

    return back()->withErrors([
        'email' => 'El correo o la contraseña son incorrectos.',
    ]);
});


// ===============================
// CERRAR SESIÓN
// ===============================

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});