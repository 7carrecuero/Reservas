<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    protected $table = 'asientos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fila','columna'];

    

    public function reserva_asiento(){

        return $this->hasMany('App\ReservaAsiento');
    }
}
