<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{


    protected $fillable = ['user_id', 'profession_id', 'start_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }


    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
