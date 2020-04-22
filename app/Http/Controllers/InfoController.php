<?php

namespace App\Http\Controllers;

use App\Info;
use App\DataSigFox;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Info::all();
	   return $data;
    }

    public function registro_especie(){
        return view('especie/index');
    }

    public function especie_save(Request $request){
        
        return $request;

    }

    public function mapa(){
        return view('mapa');
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
        //$info = new Info;
            
 
	// $cadena = $request->device;
	//	$cadena +=  $request->hum;
	//	$cadena += $request->temp;
		//$info->data = $request->getContent();

        //$info->save();

        // Guardar Ordenado 

        $data = new DataSigFox;

        $data->device = $request->device;
        $data->hum = $request->hum;
        $data->temp = $request->temp;
        $data->shum = $request->shum;
        $data->stemp = $request->stemp;
        $data->bateria = $request->bateria;
        $data->lat =  $request->lat;
        $data->lng =  $request->lng;

        $data->save();

	 return response()->json($data);
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        //
    }
}
