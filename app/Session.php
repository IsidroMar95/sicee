<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

    protected $fillable = [
        'year', 'description'
    ];

    protected $description = ['ENERO-ABRIL', 'MAYO-SEPTIEMBRE', 'AGOSTO-DICIEMBRE'];
}
