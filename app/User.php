<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";

    protected $fillable = [
        'name', 'lastname','email', 'username', 'id_document', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function subjects(){

        return $this->hasMany('App\Subject');

    }

    public function students_teacher(){

        return $this->hasMany('App\Students_teachers');

    }

    public function lessions(){

        return $this->hasMany('App\Students_teachers', 'teacher');

    }

    public function notifications(){

        return $this->hasMany('App\notification');

    }
}
