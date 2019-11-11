<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_period extends Model
{
    protected $fillable = [
        'year', 'description'
    ];

    // protected $description = ['ENERO-ABRIL', 'MAYO-SEPTIEMBRE', 'AGOSTO-DICIEMBRE'];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
