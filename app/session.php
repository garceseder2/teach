<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    //
    protected $table = "sessions";

    protected $fillable = [
        "start_class_time",
        "class_hours",
        "class_model",
        "request_status",
        "class"

    ];

    public function Students_teachers(){

        return $this->belongsTo('App\Students_teachers', 'class');

    }
}
