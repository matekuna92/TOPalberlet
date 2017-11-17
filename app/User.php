<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function favouriteProducts() /* Many to many kapcsolat pivot táblával */
    {
        return $this->morphedByMany(Post::class, 'favouriteable')
            ->withPivot(['created_at']) /* Kiszedjük a mező értékét is a pivot táblából, mely időpontban lett hozzáadva a kedvencekhez -opcionális- */
            ->orderBy('pivot_created_at', 'desc'); /* Legutóbb hozzáadott elem jelenik meg elsőként */
    }

    /* Példa mutatorra, azonban nem használjuk */

    //    public function setPasswordAttribute($password){
//        if(!empty($password)){
//            $this->attributes['password'] = bcrypt($password);
//        }
//        $this->attributes['password'] = $password;
//    }

}
