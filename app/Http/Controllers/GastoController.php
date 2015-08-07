<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\GastoModel;
use App\TipoGastoModel;


class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $gastos = GastoModel::all();

        $array_gastos = array();
        
        foreach ($gastos as $gasto) {
            $tmp['importe'] = $gasto->importe;
            $tmp['fecha_vencimineto'] = $gasto->fecha_vencimineto;
            $tmp['nombre'] = $gasto->tipo_gasto->nombre;
            $tmp['id'] = $gasto->id;
            array_push($array_gastos, $tmp);
        }

        return view('gasto_listado', ['gastos' => $array_gastos, 'title_panel' => 'Lista Gastos' ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $gasto = GastoModel::findOrFail($id);
        
        $datos = array();
        $datos['gasto_id'] = $gasto->id;
        $datos['id_tipo_gasto'] = $gasto->tipo_gasto->id;
        $datos['tipo_gasto_nombre'] = $gasto->tipo_gasto->nombre;
        $datos['importe'] = $gasto->importe;
        $datos['fecha_vencimineto'] = $gasto->fecha_vencimineto;

        $tipos_gasto = TipoGastoModel::all();
        $datos_tipo = array();
        foreach($tipos_gasto as $tipo) {
            $datos_tipo[$tipo->id] = $tipo->nombre;
        }

        return view('gasto_edit', ['gasto' => $datos, 'title_panel' => 'Editar Gastos', 'tipo_gasto' => $datos_tipo]);
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
        $gasto = GastoModel::findOrFail($id);
        $gasto->fill( $request->all());
        $gasto->save();

        return redirect()->route('gasto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function pagar($id) 
    {
        $gasto = GastoModel::findOrFail($id);
        $gasto->fecha_pago = date("Y/m/d");
        $gasto->save();

        return redirect()->route('gasto');
    }

    public function show_deuda() {
        $gasto = GastoModel::where('fecha_pago', '=',null)->get();
        dd($gasto);

    }
}