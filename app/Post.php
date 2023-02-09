<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];

    public function category(){
        //il post ha solo una category associata
        return $this->belongsTo('App/Category');
    }
}
