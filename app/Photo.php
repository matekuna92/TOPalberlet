<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images';
    protected $fillable = ['file'];

    public function houses()
    {
        return $this->belongsTo('App\House');
    }


}
