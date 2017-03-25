<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = ['user_id','evento_id','data','pago'];

    public function evento() {
        return $this->belongsTo('App\Evento');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
