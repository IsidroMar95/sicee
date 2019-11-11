<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Career extends Model
{
    protected $dates = ['start_date', 'created_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'agreementNumber', 'start_date', 'status'];

    /**
     * @return HasMany
     */
    public function group()
    {
        return $this->hasMany(Group::class);
    }


    /**
     * @return HasMany
     */
    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
