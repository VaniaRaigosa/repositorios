<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class ventaController extends Controller
{
    public function guarda_venta(Request $request){
        
        $venta = new Venta();

        $venta->total = $request->total;
        $venta->recibido = $request->recibido;
        $venta->entregado = $request->entregado;

        $venta->save();

        return response()->json($venta,200);
    }
}
