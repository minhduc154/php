<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    public function newstype(){
    	return $this->belongsTo('App\NewsType','id_newstype','id');
    }

    // public function user(){
    // 	return $this->belongsTo('App\User','id_user','id');
    // }


    // protected $fillable = ['name_news', 'description_news', 'id_user',
    //  'id_newstype','tittle_news','content_news','image_news',,'created_at'];
}
