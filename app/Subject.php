<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

    protected $table = "subjects";

    protected $fillable = [
        "subject", 
        "description",
        "category_id",
        "user_id"
    ];

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function students_teacher(){

        return $this->hasMany('App\Students_teachers');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function tags(){

        return $this->belongsToMany('App\Tags');

    }

}
