<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Funcion extends Model
{
    protected $table = 'funciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','resumen','descripcion','precio','fecha','foto','asiento_id','user_id'];

    public function reserva(){

        return $this->hasMany('App\Reserva');
    }

    public function funcion(){

        return $this->hasMany('App\Funcion');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function scopeSearch($query, $fecha){
        
            return $query->where('fecha','=',$fecha);  

    }
}
