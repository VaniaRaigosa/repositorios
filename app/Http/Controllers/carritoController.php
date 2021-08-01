<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class carritoController extends Controller
{

    public function listar_carrito(Request $request){

        return Carrito::where('producto','like',$request->product)->get();

        //$carrito = Carrito::all();

        //return $carrito;
    }


    public function guarda_carrito(Request $request){
        
        $carritos = new Carrito();
        
        $carritos->producto = $request->producto;
        $carritos->descri = $request->descri;
        $carritos->costo = $request->costo;

        $carritos->save();

        return response()->json($carritos,200);
    }

    public function elimina_carrito(Request $request){
        $car = Carrito::find($request->id);
        $car->delete();

        return response()->json(['code'=>'Ok'],200);
    }
}
