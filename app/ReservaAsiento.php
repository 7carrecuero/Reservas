<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaAsiento extends Model
{
    protected $table = 'reserva_asiento';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['reserva_id','asiento_id','funcion_id'];


    public function reserva(){

        return $this->belongsTo('App\Reserva');
    }

    public function asiento(){

        return $this->belongsTo('App\Asiento');
    }
    public function funcion(){

        return $this->belongsTo('App\Funcion');
    }
}
