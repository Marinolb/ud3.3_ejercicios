<?php

use Illuminate\Support\Facades\Route;
use App\Models\Alumno;
use App\Models\Nota;
use App\Models\Asignatura;
use Illuminate\Http\Request;

// Rutas CRUD para Alumnos
Route::get('/alumnos', function () {
    // Devuelve todos los alumnos
    return response()->json(Alumno::all(), 200);
});

Route::get('/alumnos/{id}', function ($id) {
    // Devuelve un alumno por ID
    $alumno = Alumno::find($id);
    return $alumno ? response()->json($alumno, 200) : response()->json(['message' => 'Alumno no encontrado'], 404);
});

Route::post('/alumnos', function (Request $request) {
    // Crea un nuevo alumno
    $alumno = Alumno::create($request->all());
    return response()->json($alumno, 201); 
});

Route::put('/alumnos/{id}', function (Request $request, $id) {
    // Actualiza un alumno por ID
    $alumno = Alumno::find($id);
    if ($alumno) {
        $alumno->update($request->all());
        return response()->json($alumno, 200);
    }
    return response()->json(['message' => 'Alumno no encontrado'], 404);
});

Route::delete('/alumnos/{id}', function ($id) {
    // Elimina un alumno por ID
    $alumno = Alumno::find($id);
    if ($alumno) {
        $alumno->delete();
        return response()->noContent(); 
    }
    return response()->json(['message' => 'Alumno no encontrado'], 404);
});





// Rutas CRUD para Notas
Route::get('/notas', function () {
    // Devuelve todas las notas
    return response()->json(Nota::all(), 200);
});

Route::get('/notas/{id}', function ($id) {
    // Devuelve una nota por ID
    $nota = Nota::find($id);
    return $nota ? response()->json($nota, 200) : response()->json(['message' => 'Nota no encontrada'], 404);
});

Route::post('/notas', function (Request $request) {
    // Crea una nueva nota
    $nota = Nota::create($request->all());
    return response()->json($nota, 201);
});

Route::put('/notas/{id}', function (Request $request, $id) {
    // Actualiza una nota por ID
    $nota = Nota::find($id);
    if ($nota) {
        $nota->update($request->all());
        return response()->json($nota, 200);
    }
    return response()->json(['message' => 'Nota no encontrada'], 404);
});

Route::delete('/notas/{id}', function ($id) {
    // Elimina una nota por ID
    $nota = Nota::find($id);
    if ($nota) {
        $nota->delete();
        return response()->noContent();
    }
    return response()->json(['message' => 'Nota no encontrada'], 404);
});





// Rutas CRUD para Asignaturas
Route::get('/asignaturas', function () {
    // Devuelve todas las asignaturas
    return response()->json(Asignatura::all(), 200);
});

Route::get('/asignaturas/{id}', function ($id) {
    // Devuelve una asignatura por ID
    $asignatura = Asignatura::find($id);
    return $asignatura ? response()->json($asignatura, 200) : response()->json(['message' => 'Asignatura no encontrada'], 404);
});

Route::post('/asignaturas', function (Request $request) {
    // Crea una nueva asignatura
    $asignatura = Asignatura::create($request->all());
    return response()->json($asignatura, 201);
});

Route::put('/asignaturas/{id}', function (Request $request, $id) {
    // Actualiza una asignatura por ID
    $asignatura = Asignatura::find($id);
    if ($asignatura) {
        $asignatura->update($request->all());
        return response()->json($asignatura, 200);
    }
    return response()->json(['message' => 'Asignatura no encontrada'], 404);
});

Route::delete('/asignaturas/{id}', function ($id) {
    // Elimina una asignatura por ID
    $asignatura = Asignatura::find($id);
    if ($asignatura) {
        $asignatura->delete();
        return response()->noContent();
    }
    return response()->json(['message' => 'Asignatura no encontrada'], 404);
});
