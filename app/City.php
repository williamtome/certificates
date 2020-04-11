<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'cities';

    public $fillable = ['name', 'state_id'];

    public $timestamps = false;

    public function state(){
        return $this->belongsTo(State::class);
    }
}
