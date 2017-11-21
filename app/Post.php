<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Photo;
use Illuminate\Http\Request;

    class Post extends Model
    {
        use Sluggable;

        protected $sluggable = [
        'build_from' => 'title',
        'save_to' => 'slug',
        'on_update' => true,
        ];                                           // grab title every time i save it, and save it to SLUG column
                                                    // alapból update esetén nem működik, ezért kell az on_update true */

    protected $fillable = [
         'photo_id', 'city', 'street', 'type', 'category', 'price',	'size',	'rooms', 'empty', 'housetype', 'heating','body'
    //'id', 'user_id',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title' // title oszlopból pullolja az urlt...  ezt tárolja a slug-column ben
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
