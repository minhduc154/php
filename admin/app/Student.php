<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";

    protected $primaryKey = "id";
    protected $fillable = [
        'id_user',
        'name-student',
        'image_student',
        'career_student',
        'jobtype_student',
    ];
    public $timestamps = false;

    

}
