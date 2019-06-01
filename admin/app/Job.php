<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "job";

    public function company(){
    	return $this->belongsTo('App\Company','id','id');
    }

    public function topic(){
    	return $this->hasMany('App\Topic','id','id');
    }
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_company',
        'name_job',
        'type_job',
        'description_job',
        'salary_job',
        'address_job',
        'url_job',
        'workingtime_job',
        'applicationtime_job',
    ];
}
