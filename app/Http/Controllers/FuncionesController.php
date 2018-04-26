<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcion;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FuncionRequest;

class FuncionesController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $funciones = Funcion::orderBy('nombre', 'ASC')->paginate(5);

        return view('admin.funciones.index')->with('funciones', $funciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('admin.funciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncionRequest $request)
    {
        $funcion = new Funcion($request->all());
        $funcion->user_id = \Auth::user()->id;
        if($request->file('foto')){
            $foto = $request->file('foto');         
            $name_archivo = 'foto_funcion_'.time().'.'.$foto->getClientOriginalExtension();
            $path = public_path().'/images/funciones/';
            $foto->move($path, $name_archivo);
            $funcion->foto = $name_archivo;
            $funcion->extens = $foto->getClientOriginalExtension();
            //GENERANDO NOMBRE
            $nombre = explode('.'.$funcion->extens,$foto->getClientOriginalName());
        }
        $funcion->save();

        flash('Se ha registrado el asiento sactisfactoriamente!');
        return redirect()->route('funciones.index');
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

        $funcion = Funcion::find($id);        
        return view('admin.funciones.edit')->with('funcion', $funcion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FuncionRequest $request, $id)
    {
        $funcion = Funcion::find($id);
        $foto_temp=$funcion->foto;
        $funcion->fill($request->all());


        if($request->file('foto')){
            $foto = $request->file('foto');    
            $name_foto = 'foto_funcion_'.time().'.'.$foto->getClientOriginalExtension();
            $path = public_path().'/images/funciones/';
            if(!empty($foto_temp)){
            unlink($path.$foto_temp);  
            }            
            $foto->move($path, $name_foto);
            $funcion->foto = $name_foto;
        }
        $funcion->save();

        flash('Se ha actualizado de manera exitosa!');
        return redirect()->route('funciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcion = Funcion::find($id);
        $funcion->delete();
        flash('Se ha eliminado exitosamente el item!');
        return redirect()->route('funciones.index');
    }
}
