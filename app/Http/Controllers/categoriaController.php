<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    public function listar_categorias(Request $request){

        return Categoria::where('nomCate','like',$request->nombre)->get();
        
        //$categorias = Categoria::all();

        //return $categorias;
    }

    public function guardar_categorias(Request $request){
        
        if($request->id == 0){
            $categoria = new Categoria();
        }else{
            $categoria = Categoria::find($request->id);
        }
        

        $categoria->nomCate = $request->nomCate;
        $categoria->desCate = $request->desCate;
        $categoria->estado = $request->estado;

        $categoria->save();

        return response()->json($categoria,200);
    }

    public function eliminar_categorias(Request $request){
        $categori = Categoria::find($request->id);
        $categori->delete();

        return response()->json(['code'=>'Ok'],200);
    }
}
