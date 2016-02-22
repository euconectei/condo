<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'id_reported', 'id_reporter', 'report', 'done'
    ];


}
