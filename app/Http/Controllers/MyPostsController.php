<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Post;
use App\Photo;
use DB;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class MyPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$users = Auth::user();
       // $posts = DB::table('posts')->where('user_id', auth()->id())->get(); így is működik !
        if($users = Auth::user())
        $posts = $users->posts()->orderBy('created_at', 'desc')->get();
        return view('myposts',compact('posts','photos','users'));

        /* Át kell adni a változókat a view számára, különben undefined variable errort kapunk ! */
    }

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
        $post = Post::findOrFail($id);                                      // megkeressük az adott posztot
        return view('edit',compact('post'));                 // a fenti változónév alapján írjuk be ! ha posts, akkor itt is, különben error
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
        $input = $request->all();

        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file' => $name]);
            $input['photo_id'] = $photo->id;
        }

        Auth::user()->posts()->whereId($id)->first()->update($input);
        // we want to find the user post with same id as in update(parameter)
        return redirect('/hirdeteseim');
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
        $post = Post::findOrFail($id);
        if(isset($post->photo->file))
        {
            unlink(public_path() . $post->photo->file);
        }
        $post->delete();
        return redirect('/hirdeteseim');
    }
}
