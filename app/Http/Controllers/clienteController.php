<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function listar_clientes(Request $request){

        return Cliente::where('cliente_numero','like',$request->numero)->get();
        
       // $cliente = Cliente::all();

        //return $cliente;
    }

    public function guarda_clientes(Request $request)
    {
        if($request->id == 0){
            $clientes = new Cliente();
        }else{
            $clientes = Cliente::find($request->id);
        }
        $clientes->cliente_numero = $request->cliente_numero;
        $clientes->nombre_cliente = $request->nombre_cliente;
        $clientes->apellido_paterno = $request->apellido_paterno;
        $clientes->apellido_materno = $request->apellido_materno;
        $clientes->razon_social = $request->razon_social;
        $clientes->rfc = $request->rfc;
        $clientes->direccion = $request->direccion;
        $clientes->pais = $request->pais;
        $clientes->correo_electronico = $request->correo_electronico;
        $clientes->telefono = $request->telefono;
        $clientes->estado_cliente = $request->estado_cliente;
        $clientes->save();

        return response()->json($clientes, 200);
    }

    public function eliminar_clientes(Request $request){
        $client = Cliente::find($request->id);
        $client->delete();

        return response()->json(['code'=>'Ok'],200);
    }
}
