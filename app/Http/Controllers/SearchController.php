<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $input = $request->all();
        $city = $request['city'];
        dd($city);

        //$city = Input::city;
        //$query = DB::table('posts')->where('city','=','Budapest')->get();
        //$posts = DB::table('posts')->whereBetween('price',array(10000,50000))->get();

       //return $posts;
    }

}
