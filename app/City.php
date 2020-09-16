<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class City extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'cities';

    public $fillable = ['name', 'state_id'];

    public $timestamps = false;

    protected $auditInclude = [];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
