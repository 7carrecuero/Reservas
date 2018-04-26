<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','valorUnitario','valorTotal','cantidad','status','funcion_t_id','user_id'];

    public function reserva_asiento(){

        return $this->hasMany('App\ReservaAsiento');
    }

    public function funcion(){

        return $this->belongsTo('App\Funcion');
    }
    
}
