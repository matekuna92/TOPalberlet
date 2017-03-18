<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images';
    protected $fillable = ['file'];

    public function posts()
    {
        return $this->belongsTo('App\Post');
    }


}
