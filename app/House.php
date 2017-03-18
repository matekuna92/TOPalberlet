<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'city', 'street', 'type', 'category', 'price',	'size',	'rooms', 'empty', 'housetype', 'heating'
    ];
    //

    public function users()
    {
        return $this->belongsTo('App\Post');
    }
}
