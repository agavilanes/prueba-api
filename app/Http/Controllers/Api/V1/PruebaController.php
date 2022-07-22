<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Prueba;
use Illuminate\Http\Request;
use App\Http\Requests\V1\PruebaRequest;
use Illuminate\Support\Facades\Auth;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
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
        $request->validated();
        $user = Auth::user();
        $post->user()->associate($user);
        $post->primer_nombre=$request->input('primer_nombre');
        $post->segundo_nombre=$request->input('segundo_nombre');
        $post->primer_apellido=$request->input('primer_apellido');
        $post->segundo_apellido=$request->input('segundo_apellido');

        $res = $post->save();

        if($res)
        {
            return response()->json(['message' => 'Petición correcta!'], 200);
        }
        return response()->json(['message' => 'Error en el proceso!'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(Prueba $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prueba $prueba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prueba $prueba)
    {
        //
    }
}
