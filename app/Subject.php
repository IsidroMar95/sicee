<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable = ['name', 'grade_level_id', 'career_id', 'teacher_id', 'school_period_id', 'status'];

    public function scopeAllowed($query)
    {
        if (auth()->user()->hasRole('Admin')) {
            return $query->latest('created_at');
        } else {
            $teacher = Teacher::where('user_id', auth()->id())->first();
            return $query->where('teacher_id', $teacher->id);
        }
    }


    public function grade_level()
    {
        return $this->belongsTo(Grade_level::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function school_period()
    {
        return $this->belongsTo(School_period::class);
    }


}
