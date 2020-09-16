<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class EntityEvent extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'entities_events';

    public $timestamp = false;

    protected $auditInclude = [];
}
