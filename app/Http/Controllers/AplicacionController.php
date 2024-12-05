<?php

namespace App\Http\Controllers;

use App\Models\Aplicacion;
use App\Models\Empleo;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class AplicacionController extends Controller
{
    // Método para listar todas las aplicaciones
    public function index()
    {
        $aplicaciones = Aplicacion::with(['empleo', 'curriculum'])->get(); // Incluimos las relaciones
        return view('aplicacion.index', compact('aplicaciones'));
    }

    // Mostrar el formulario para crear una nueva aplicación
    public function create()
    {
        $empleos = Empleo::all();
        $curriculums = Curriculum::all();
        return view('aplicacion.create', compact('empleos', 'curriculums'));
    }

    // Guardar una nueva aplicación
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'idempleo' => 'required|exists:empleo,id',
            'idcurriculum' => 'required|exists:curriculums,id',
        ]);

        Aplicacion::create([
            'fecha' => $request->fecha,
            'idempleo' => $request->idempleo,
            'idcurriculum' => $request->idcurriculum,
        ]);

        return redirect()->route('aplicaciones.index'); // Redirige a la lista de aplicaciones
    }

    // Mostrar el formulario para editar una aplicación existente
    public function edit($id)
    {
        $aplicacion = Aplicacion::findOrFail($id);
        $empleos = Empleo::all();
        $curriculums = Curriculum::all();
        return view('aplicacion.edit', compact('aplicacion', 'empleos', 'curriculums'));
    }

    // Actualizar una aplicación existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required|date',
            'idempleo' => 'required|exists:empleo,id',
            'idcurriculum' => 'required|exists:curriculums,id',
        ]);

        $aplicacion = Aplicacion::findOrFail($id);
        $aplicacion->update([
            'fecha' => $request->fecha,
            'idempleo' => $request->idempleo,
            'idcurriculum' => $request->idcurriculum,
        ]);

        return redirect()->route('aplicaciones.index'); // Redirige a la lista de aplicaciones
    }

    // Eliminar una aplicación
    public function destroy($id)
    {
        $aplicacion = Aplicacion::findOrFail($id);
        $aplicacion->delete();

        return redirect()->route('aplicaciones.index'); // Redirige a la lista de aplicaciones
    }
}
