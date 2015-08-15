<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TipoGastoModel;

class TipoGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tipo_gastos = TipoGastoModel::all();
        return view('tipo_gasto/listar', ['tipo_gastos' => $tipo_gastos,'title_panel' => 'Lista Gastos' ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_gasto/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        TipoGastoModel::create($input);
        return redirect()->route('tipo_gasto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $gasto = TipoGastoModel::findOrFail($id);
        return view('tipo_gasto/editar', compact('gasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $gasto = TipoGastoModel::findOrFail($id);
        $gasto->fill( $request->all());
        $gasto->save();

        return redirect()->route('tipo_gasto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $gasto = TipoGastoModel::findOrFail($id);
        dd($gasto);
        //$gasto->delete();

        //Session::flash('message', $gasto->nombre.' fue eliminado');
        return redirect()->route('tipo_gasto');   
    }
}