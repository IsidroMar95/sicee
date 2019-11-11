<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{

    protected $fillable = ['name'];

    public function teacher()
    {
        $this->hasOne(Teacher::class);
    }
}
