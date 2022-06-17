<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['url','user_id'];

    //Uno a muchos en imagenes
    public function user(){
        return $this->belongsTo('App\User');
    }
}
