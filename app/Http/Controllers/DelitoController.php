<?php

namespace App\Http\Controllers;

use App\Models\Delito;
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
        if($req->atenuante == 0 && $req->agravante > 1 ){
            return response()->json(['data'=> $delito->max ],200);
        }
        if($req->atenuante === $req->agravante){
            return response()->json(['data'=> ($delito->min + $delito->max)/2 ],200);
        }
        if($req->atenuante > 0 &&  $req->agravante < 1){
            return response()->json(['data'=> $delito->min ],200);
        } 
    }
}
