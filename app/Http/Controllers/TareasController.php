<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    public function listado_de_tareas(){
        $tareas = Tareas::all();
        return view('lista', ["todas_las_tareas" => $tareas]);
    }
    public function nuevaTarea(Request $req){
        $tarea = new Tareas();

        $tarea->nombre_tarea = $req->input('nombre_tarea');
        $tarea->save();
    
        $tareas = Tareas::all();
        return view('lista', ["todas_las_tareas" => $tareas]);      
    }
    public function completarTarea($id) {
        $tarea = Tareas::find($id);
        $tarea->delete();
        return redirect()->route('listarTareas');   
    }
}
