<?php

namespace App\Http\Controllers;

use App\Models\AtenuanteAgravante;
use Illuminate\Http\Request;

class AtenuanteAgravanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response()->json(['data'=>AtenuanteAgravante::all()],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AtenuanteAgravante  $atenuanteAgravante
     * @return \Illuminate\Http\Response
     */
    public function show(AtenuanteAgravante $atenuanteAgravante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AtenuanteAgravante  $atenuanteAgravante
     * @return \Illuminate\Http\Response
     */
    public function edit(AtenuanteAgravante $atenuanteAgravante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AtenuanteAgravante  $atenuanteAgravante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AtenuanteAgravante $atenuanteAgravante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AtenuanteAgravante  $atenuanteAgravante
     * @return \Illuminate\Http\Response
     */
    public function destroy(AtenuanteAgravante $atenuanteAgravante)
    {
        //
    }
}
