<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //metodos

    //metodo para mostrar la vista de los post 
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view("cursos.index", compact('cursos'));
    }




    // metodo que retorna la vista para crear registros
    public function create()
    {
        return view("cursos.create");
    }




    //metodo para crear registros en una base de datos mandados por un formulario
    public function store(StoreCurso $request)
    {
        //DIFERENTES FORMAS DE CAPTURAR LOS DATOS DE UN FORMULARIO

        //FORMA #1
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();
        // return redirect()->route('cursos.show', $curso);

        //FORMA #2
        //    $curso = Curso::create([
        //        'name' => $request->name,
        //        'descripcion' => $request->descripcion,
        //        'categoria' => $request->categoria
        //    ]);

        //FORMA #3
        #Asignacion massiva
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }


    //metodo para mostrar un post en espesifico
    public function show(Curso $curso) // se puede cambiar el nombre de la variable para ser mas espesifico y borrar la linea 33
    {
        // $curso = Curso::find($curso);
        return view("cursos.show", compact('curso'));
    }


    //metodo para retornar una vista donde se editan los formularios
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }


    //metodo para editar un registro
    public function update(Request $request, Curso $curso)
    {
        //validacion de formularios
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index', $curso);
    }
}
