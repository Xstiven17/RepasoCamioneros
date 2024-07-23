<?php

namespace App\Http\Controllers;

use App\Models\camion;
use App\Models\camionero;
use Illuminate\Http\Request;

class CamioneroController extends Controller
{

    public function index(){
        $camioneros = camionero::all();
        return view('Camiones11.index', compact('camioneros'));
    }


    public function create(){
        return view('Camiones11.create');
    }

    public function store(Request $request){
        $camioneros = new camionero();
        $camioneros->dni = $request->dni;
        $camioneros->poblacion = $request->poblacion;
        $camioneros->nombre = $request->nombre;
        $camioneros->telefono = $request->telefono;
        $camioneros->direccion = $request->direccion;
        $camioneros->salario = $request->salario;
        $camioneros->save();

        return redirect()->route('camiones17.create');  ///
    }

    public function show($id){
        $camioneros = camionero::find($id);
        return view('Camiones11.show', compact('camioneros'));
    }

    public function edit($id){
        $camioneros = camionero::find($id);
        return view('Camiones11.edit', compact('camioneros'));
    }

    public function update(Request $request, camionero $camioneros){
        $camioneros->update($request->all());
        return redirect()->route('camiones17.index');
    }

   public function destroy($id){

    $camioneros = camionero::findOrFail($id);
    $camioneros->delete();
    return redirect()->route('camiones17.index');
   }
}
