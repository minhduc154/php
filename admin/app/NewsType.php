<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $table = "newstype";

    public function news(){
    	return $this->hasMany('App\News','id_newstype','id');
    }
}
