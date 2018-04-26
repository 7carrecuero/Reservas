<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Funcion;
use App\Asiento;
use App\Reserva;
use App\ReservaAsiento;
use App\Http\Controllers\Utilities\HasidsController;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\AsientosReservaRequest;

class FrontController extends Controller
{

    public function setDateTimestampUnix($date)
    {
        $unixDate = strtotime($date) * 1000;
        return $unixDate;
    }

    public function index(Request $request)
    {   
        
        if(isset($request->fecha) && !empty($request->fecha)){
        $date = str_replace("/", "-", $request->fecha);
        $fecha= \Carbon\Carbon::parse($date)->format('Y-m-d');
        
        $funciones = Funcion::search($fecha)->orderBy('nombre','DESC')->get();
        }else{
        $funciones = Funcion::orderBy('fecha', 'ASC')->get();
        }

        return view('front.index')->with('funciones', $funciones);
    }

    /**
     * Show the form for reservation.
     *
     * @return \Illuminate\Http\Response
     */
    public function asientos($id)
    {

        $funcion = Funcion::find($id);        
        $asientos = Asiento::orderBy('id', 'ASC')->get();
             
        $reservaAsiento = ReservaAsiento::where('funcion_id','=',$funcion->id)->orderBy('id','ASC')->pluck('asiento_id')->toArray();
        return view('front.asientos')->with('funcion', $funcion)->with('asientos', $asientos)->with('reservaAsiento', $reservaAsiento);
    }

    public function asientos_store(Request $request){
        $asientosSelects = $request->all();
    }

    public function reserva($id)
    {

        $funcion = Funcion::find($id);        
        return view('front.reserva')->with('funcion', $funcion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsientosReservaRequest $request)
    {

        $reserva = new Reserva();
        $reserva->valorUnitario = $request->precio;
        $reserva->valorTotal = $request->total;
        $reserva->cantidad = $request->butacas;
        $reserva->funcion_id = $request->funcion;
        $reserva->user_id = \Auth::user()->id;
        $reserva->save();

        //Se crea una fecha en fomato timestamp para la generacion del codigo de reserva
        $fecha         = $this::setDateTimestampUnix(date("Y-m-d H:i:s"));
        //Se genera el codigo de reserva a partir del id de reserva y de la fecha actual del servidor
        $hashids = new HasidsController($reserva->id . $fecha, 10, "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890");

        $codigo = $hashids->encode(1, 2, 3, 4); // o2fXhV

        $reserva->numero= $codigo;
        $reserva->save();

        foreach($request->asientos as $asiento){
        $reservaAsiento = new ReservaAsiento();
        $reservaAsiento->asiento_id = $asiento;
        $reservaAsiento->reserva_id = $reserva->id;
        $reservaAsiento->funcion_id = $request->funcion;
        $reservaAsiento->save();
        }

        Log::info('Sess registro una nueva reserva con el id: '.$reserva->id." y codigo de reserva: ".$codigo." del id de usuario: ".\Auth::user()->id);

        flash('Se ha realizado la reserva sactisfactoriamente!');
        return redirect()->route('main.show',$reserva->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::find($id);
        $reservaAsiento = ReservaAsiento::where('reserva_id','=',$id)->orderBy('id','ASC')->get();
        return view('front.show')->with('reserva', $reserva)->with('reservaAsiento', $reservaAsiento);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
