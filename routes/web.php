<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Estudiante;
use App\Models\Inscripcion;
use App\Models\Certificado;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('vue');
});
//Route::get('/{page}', fn() => view('vue'));
Route::get('/inicio', fn() => view('vue'));
Route::get('/certificacion', fn() => view('vue'));
Route::get('/alumno', fn() => view('vue'));
Route::get('/ingreso', fn() => view('vue'));
Route::get('/seguimiento', fn() => view('vue'));
Route::get('/newalumno', fn() => view('vue'));

Route::get('usuario', function () {
    $usuario = Usuario::get();
    return $usuario;
});
Route::get('categoria', function () {
    $categoria = Categoria::get();
    return $categoria;
});
Route::get('estudiante', function () {
    $estudiante = Estudiante::get();
    return $estudiante;
});
Route::get('inscripcion', function () {
    $inscripcion = Inscripcion::get();
    return $inscripcion;
});
Route::get('certificado', function () {
    $certificado = Certificado::get();
    return $certificado;
});
Route::post('estudiante', function (Request $request) {
    $estudiantes = new Estudiante;
    /*$request->validate([
        'nombre'=> 'required|max:120',
        'apepaterno'=> 'required|max:120',
        'apematerno'=> 'required|max:120',
        'direccion'=> 'required|max:255',
        'telefono'=> 'required|unique:estudiantes'
    ]);*/
    $estudiantes->nombre = $request->input('nombre');
    $estudiantes->apepaterno = $request->input('apepaterno');
    $estudiantes->apematerno = $request->input('apematerno');
    $estudiantes->direccion = $request->input('direccion');
    $estudiantes->telefono = $request->input('telefono');
    $estudiantes->usermod = 1;
    $estudiantes->save();
    return "Ok";
});
Route::put('estudiante/{id}', function (Request $request, $id) {
    $request->validate([
        'nombre' => 'required|max:120',
        'apepaterno' => 'required|max:120',
        'apematerno' => 'required|max:120',
        'direccion' => 'required|max:255',
        'telefono' => 'required|numeric|unique, ' . $id
    ]);
    $estudiante = Estudiante::findOrFail($id);
    $estudiante->nombre = $request->input('nombre');
    $estudiante->apepaterno = $request->input('apepaterno');
    $estudiante->apematerno = $request->input('apematerno');
    $estudiante->direccion = $request->input('direccion');
    $estudiante->telefono = $request->input('telefono');
    $estudiante->usermod = 1;
    $estudiante->save();
    return "Ok";
});
// CERTIFICADO
Route::post('certificado', function (Request $request) {
    $request->validate([
        'titulo' => 'required|max:255',
        'costo' => 'required|numeric',
    ]);
    $certificados = new Certificado;
    $certificados->titulo = $request->input('titulo');
    $certificados->costo = $request->input('costo');
    $certificados->id_categoria = $request->input('id_categoria');
    $certificados->usermod = 1;
    $certificados->save();
    return "Ok";
});
Route::put('certificado/{id}', function (Request $request, $id) {
    $request->validate([
        'titulo' => 'required|max:255',
        'costo' => 'required|numeric'
    ]);
    $certificado = Certificado::findOrFail($id);
    $certificado->nombre = $request->input('titulo');
    $certificado->apepaterno = $request->input('costo');
    $certificado->usermod = 1;
    $certificado->save();
    return "Ok";
});
// CATEGORIA
Route::post('categoria', function (Request $request) {
    $request->validate([
        'titulo' => 'required|max:255'
    ]);
    $categorias = new Categoria;
    $categorias->titulo = $request->input('titulo');
    $categorias->usermod = 1;
    $categorias->save();
    return "Ok";
});
Route::put('categoria/{id}', function (Request $request, $id) {
    $request->validate([
        'titulo' => 'required|max:255'
    ]);
    $categoria = Categoria::findOrFail($id);
    $categoria->titulo = $request->input('titulo');
    $categoria->estatus = $request->input('estatus');
    $categoria->usermod = 1;
    $categoria->save();
    return "Ok";
});
// INSCRIPCION
Route::post('inscripcion', function (Request $request) {
    $request->validate([
        'id_estudiante' => 'required',
        'id_certificado' => 'required'
    ]);
    $inscripcion = new Inscripcion;
    $inscripcion->id_estudiante = $request->input('id_estudiante');
    $inscripcion->id_certificado = $request->input('id_certificado');
    $inscripcion->usermod = 1;
    $inscripcion->save();
    return "Ok";
});
