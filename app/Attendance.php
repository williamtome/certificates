<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $table = 'attendances';

    public $timestamp = false;
}
