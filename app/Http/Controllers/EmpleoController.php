<?php

namespace App\Http\Controllers;

use App\Models\Empleo;
use App\Models\Empresa1;
use Illuminate\Http\Request;

class EmpleoController extends Controller
{
    public function index()
    {
        // Obtener todos los empleos de la base de datos
        $empleos = Empleo::all();

        // Pasar los empleos a la vista
        return view('empleo.showempleo', compact('empleos'));
    }

      // Método para mostrar el formulario de crear oferta de trabajo
      public function create()
      {
          $empresas = Empresa1::all(); // Obtener todas las empresas
          return view('empleo.create', compact('empresas')); // Pasamos las empresas a la vista
      }
  
      // Método para guardar la oferta de trabajo
      public function store(Request $request)
      {
          $request->validate([
              'id_empresa' => 'required',
              'titulo' => 'required|string|max:255',
              'descripcion' => 'required|string',
              'salario' => 'required|numeric',
              'requisitos' => 'required|string',
          ]);
  
          Empleo::create([
              'id_empresa' => $request->id_empresa,
              'titulo' => $request->titulo,
              'descripcion' => $request->descripcion,
              'salario' => $request->salario,
              'requisitos' => $request->requisitos,
          ]);
  
          return redirect()->route('empleos.index'); // Redirige a la lista de empleos
      }
      // Método para mostrar el formulario de edición de una oferta de trabajo
public function edit($id)
{
    $empleo = Empleo::findOrFail($id);
    $empresas = Empresa1::all(); // Obtener todas las empresas
    return view('empleo.edit', compact('empleo', 'empresas'));
}

// Método para actualizar la oferta de trabajo
public function update(Request $request, $id)
{
    $request->validate([
        'id_empresa' => 'required',
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'salario' => 'required|numeric',
        'requisitos' => 'required|string',
    ]);

    $empleo = Empleo::findOrFail($id);
    $empleo->update([
        'id_empresa' => $request->id_empresa,
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'salario' => $request->salario,
        'requisitos' => $request->requisitos,
    ]);

    return redirect()->route('empleos.index'); // Redirige a la lista de empleos
}
// Método para eliminar una oferta de trabajo
public function destroy($id)
{
    $empleo = Empleo::findOrFail($id);
    $empleo->delete(); // Elimina la oferta de trabajo

    return redirect()->route('empleos.index'); // Redirige a la lista de empleos
}
}
