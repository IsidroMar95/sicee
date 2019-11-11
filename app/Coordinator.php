<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    public $timestamps = false;

    protected $fillable = ['user_id', 'profession_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
