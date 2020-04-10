<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntityEvent extends Model
{
    public $table = 'entities_events';

    public $timestamp = false;
}
