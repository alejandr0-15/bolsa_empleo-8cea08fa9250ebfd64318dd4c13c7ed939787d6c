<?php

namespace App\Http\Controllers;

use App\Models\Habilidad;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class HabilidadController extends Controller
{
    // Mostrar la lista de habilidades
    public function index()
    {
        $habilidades = Habilidad::with('curriculo')->get(); // Obtener habilidades con currículos relacionados
        return view('habilidades.show', compact('habilidades'));
    }

    // Mostrar formulario de creación de habilidad
    public function create()
    {
        // Obtener todos los currículos disponibles
        $curriculums = Curriculum::all();

        // Pasar los currículos a la vista
        return view('habilidades.create', compact('curriculums'));
    }

    // Almacenar nueva habilidad
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'idcurriculo' => 'required|exists:curriculums,id',  // Validación del ID del currículum
            'habilidades' => 'required|string|max:100',  // Validación de la habilidad
        ]);

        // Crear una nueva habilidad
        Habilidad::create($request->all());

        // Redirigir a la lista de habilidades
        return redirect()->route('habilidades.index');
    }
  // Mostrar formulario de edición de habilidad
  public function edit($id)
  {
      // Obtener la habilidad que se va a editar
      $habilidad = Habilidad::findOrFail($id);

      // Obtener todos los currículos disponibles
      $curriculums = Curriculum::all();

      // Pasar la habilidad y los currículos a la vista
      return view('habilidades.edit', compact('habilidad', 'curriculums'));
  }

  // Actualizar la habilidad
  public function update(Request $request, $id)
  {
      // Validar los datos del formulario
      $request->validate([
          'idcurriculo' => 'required|exists:curriculums,id',  // Validación del ID del currículum
          'habilidades' => 'required|string|max:100',  // Validación de la habilidad
      ]);

      // Encontrar la habilidad y actualizarla
      $habilidad = Habilidad::findOrFail($id);
      $habilidad->update($request->all());

      // Redirigir a la lista de habilidades
      return redirect()->route('habilidades.index');
  }

    // Eliminar habilidad
    public function destroy($id)
    {
        $habilidad = Habilidad::findOrFail($id);
        $habilidad->delete();
        return redirect()->route('habilidades.index');
    }
}