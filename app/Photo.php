<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use App\House;
use App\User; */

class Photo extends Model
{
    //
    protected $uploads = '/images';
    protected $fillable = ['file'];

    public function houses()
    {
        return $this->belongsTo('App\House');
    }

    public function getFileAttribute($photo) // mostmár nem kell az img src-hez mindig a /images.. elég a {{}} rész
    {
        return $this->uploads . $photo;
    }



}
