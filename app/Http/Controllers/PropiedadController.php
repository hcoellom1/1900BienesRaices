<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    //

    public function index(){
        //Método que devuelve todos los registros en la tabla mapeada en el modelo Propiedad
        $propiedades = Propiedad::all();
        return view('home', compact('propiedades'));
        
    }

    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        $nvaPropiedad = new Propiedad();
        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr = $request->input('costomtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoduenio');
        $nvaPropiedad->domicilio = $request->input('domicilio');
        $nvaPropiedad->save();

        $propiedades = Propiedad::all();
        return redirect('/');
    }

    public function editar($id){
        $propiedad = Propiedad::find($id);
        return view('editar', compact('propiedad'));
    }

    public function actualizar(Request $request, $id){
        $nvaPropiedad = Propiedad::find($id);
        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr = $request->input('costomtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoduenio');
        $nvaPropiedad->domicilio = $request->input('domicilio');
        $nvaPropiedad->save();
        return redirect('/');
    }

    public function eliminar($id){

    }

}
