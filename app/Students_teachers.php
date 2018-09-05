<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students_teachers extends Model
{
    //
    protected $table = "student_teacher";

    protected $fillable = [
        "teacher",
        "user_id",
        "score",
        "subject_id"
    ];


    public function subject(){

        return $this->belongsTo('App\Subject');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function sessions(){

        return $this->hasMany('App\session', 'class');

    }

    public function teacherclass(){

        return $this->belongsTo('App\User', 'teacher');

    }
}
