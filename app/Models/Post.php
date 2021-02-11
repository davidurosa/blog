<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];


    //Relacion de uno a Muchos Inversa

    public function users(){

        return $this->belongsTo('App\Models\User');
    }



    public function category(){

        return $this->belongsTo('App\Models\Category');
    }

    //Relacion de mucho a Muchos


    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    //Relacion Polimorfica

public function image(){
    return $this->morphOne('App\Models\Image','imageable');
}


}
