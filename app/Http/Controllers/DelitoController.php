<?php

namespace App\Http\Controllers;

use App\Models\Delito;
use App\Models\Articulo;
use Illuminate\Http\Request;

class DelitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data'=>Delito::all()],200);

    }

    public function sentencia(Request $req, $id){
        $delito = Delito::find($id);
        if(!$req->atenuante && !$req->agravante ){
            return response()->json(['data'=> "debe selecionar atenuante o agravante" ],403);
        }
        $delito->articulos = Articulo::select('codigo','descripcion')->where('delito_id',$id)->get();
        if($req->atenuante == 0 && $req->agravante > 1 ){
            $delito->pena = $delito->max;
        }else if($req->atenuante > 0 &&  $req->agravante < 1){
            $delito->pena = $delito->min;
        } else{
           $delito->pena= ($delito->min + $delito->max)/2;
        }
        return response()->json(['data'=> $delito],200);
    }
}
