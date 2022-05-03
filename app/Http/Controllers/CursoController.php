<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //validacion de formularios
        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }


    //metodo para mostrar un post en espesifico
    public function show($id)// se puede cambiar el nombre de la variable para ser mas espesifico y borrar la linea 33
    {
        $curso = Curso::find($id);
        return view("cursos.show", compact('curso'));
    }


    //metodo para retornar una vista donde se editan los formularios
    public function edit(Curso $curso){
       return view('cursos.edit', compact('curso'));
    }

    
    //metodo para editar un registro
    public function update(Request $request, Curso $curso){
         //validacion de formularios
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required|',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso);

    }
}
