<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Photo;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at', 'desc')->paginate(9);
        return view('welcome',compact('posts','photos','users'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $input = $request->all();
        $city = $input['city'];                     /* TESZT: print_r($city); */
        $minprice = $input['minprice'];
        $maxprice = $input['maxprice'];
        $maxrooms = $input['maxrooms'];             // dd($minprice,$maxrooms); ok

        $posts = Post::orderBy('created_at', 'desc')
            ->where('city','LIKE','%'.$city.'%')
            ->where('price','>=',$minprice)
            ->where('price','<=',$maxprice)
            ->where('rooms','<=',$maxrooms)
            ->paginate(9);

        return view('welcome',compact('posts','photos','users'));

        /*$input = $request->all();
        $city = $input['city'];
        $posts = DB::table('posts')
            ->when($city,function($query) use ($city)
            {
                return $query->where('city',$city);
            })
            ->get()->paginate(12);*/



       /*$posts = DB::table('posts')
            ->where(function($query) use ($city,$minprice,$maxprice,$maxrooms)
            {
                if($city)
                    $query->where('city','LIKE','%'.$city.'%');
                if($minprice)
                    $query->where('price','>=',$minprice);
                if($maxprice)
                    $query->where('price','<=',$maxprice);
                if($maxrooms)
                    $query->where('rooms','<=',$maxrooms);
            })->orderBy('created_at','desc')->paginate(12);*/

    }

        /*$query = DB::table('posts');
        $query->where('city','LIKE','%'.$city.'%');
        if($minprice) $query->where('price','>=',$minprice);
        if($maxprice) $query->where('price','<=',$maxprice);
        if($maxrooms) $query->where('rooms','<=',$maxrooms);*/




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
