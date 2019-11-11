<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade_level extends Model
{
    protected $fillable = ['name', 'description'];


    public function subject()
    {
        return $this->hasOne(Subject::class);
    }
}
