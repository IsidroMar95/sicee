<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //

    public function Career()
    {
        $this->belongsTo(Career::class);
    }
}
