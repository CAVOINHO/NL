<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comment";

    public function product() {
    	return $this->belongsTo('App\product', 'idPro', 'id');
    }

    public  function user() {
    	return $this->belongsTo('App\User', 'idUser', 'id');
    }
    public function getComment(){
    	return $this->belongsTo('App\User','idUser','id');
    }
}
