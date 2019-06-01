<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileStudent extends Model
{
    protected $table = "file_student";

    protected $primaryKey = "id";
    protected $fillable = [
		'technique_student',
		'address_student',
		'birthday',
		'taget_student',
		'education_student',
		'experience_student',
		'skill_student',
		'email_student',
		'phone_student',
		'pdf_student',
		'created_at',
		'update_at',
    ];

    public function student()
    {
        return $this->hasOne('App\Student', 'id', 'id');
    }

}
