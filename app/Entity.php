<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Entity extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'entities';

    protected $fillable = ['name', 'prefix'];

    protected $auditInclude = [];
}
