<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    /**
     *
     */
    public function store(Request $request){
        $request->validate([
            'codigo'=>'required|min:5',
            'nombre'=>'required|min:10'
        ]);

        $asignatura = new Asignatura;
        $asignatura->codigo = $request->codigo;
        $asignatura->nombre = $request->nombre;
        $asignatura->save();
        return redirect()->route('asignaturas')->with('success','Asignatura creada correctamente');
    }

    public function index(){
        $asignaturas = Asignatura::all();
        return view('asignatura.index', ['asignaturas'=>$asignaturas]);
    }

    public function show($id){
        $asignatura = Asignatura::find($id);
        return view('Asignatura.show', ['Asignatura'=>$asignatura]);
    }
    public function update(){
        $asignatura = Asignatura::all();
        return view('Asignatura.update', ['Asignaturas'=>$asignatura]);
    }
    public function destroy(){
        $asignatura = Asignatura::all();
        return view('Asignatura.destroy', ['Asignaturas'=>$asignatura]);
    }
}
