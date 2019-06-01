<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = "topic";

    public function job(){
    	return $this->belongsTo('App\Job','id','id');
    }

    public function company(){
    	return $this->belongsTo('App\Company','id','id');
    }

    public function students(){
    	return $this->belongsTo('App\Student','id','id');
    }
     public $timestamps = true;

}
