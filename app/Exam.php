<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = [];


    public function class()
    {
        return $this -> belongsTo(StudentClass::class);
    }
    public function questions()
    {
        return $this -> hasMany(Question::class);
    }


}
