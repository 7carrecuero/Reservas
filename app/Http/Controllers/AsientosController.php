<?php

namespace App\Http\Controllers;
use App\Asiento;

use Illuminate\Http\Request;

class AsientosController extends Controller
{
    public function index()
    {

        $asientos = Asiento::orderBy('fila', 'ASC')->paginate(5);

        return view('admin.asientos.index')->with('asientos', $asientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asiento = new Asiento($request->all());
        $asiento->save();

        flash('Se ha registrado sactisfactoriamente!');
        return redirect()->route('asientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $asiento = Asiento::find($id);        
        return view('admin.asientos.edit')->with('asiento', $asiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asiento = Asiento::find($id);
        $asiento->fill($request->all());
        $asiento->save();

        flash('Se ha actualizado de manera exitosa!');
        return redirect()->route('asientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asiento = Asiento::find($id);
        $asiento->delete();
        flash('Se ha eliminado exitosamente el item!');
        return redirect()->route('asientos.index');
    }
}
