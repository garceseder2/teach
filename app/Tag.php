<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    protected $table = "tags";

    protected $fillable = [
        "tag"
    ];

    public function subjects(){

        return $this->belongsToMany('App\Subject');

    }
}
