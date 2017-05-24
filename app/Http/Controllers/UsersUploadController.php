<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Photo;
use App\House;
//use Illuminate\Support\Facades\Request;


class UsersUploadController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('upload');

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
    }

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
       // if(Request::ajax()) { // Becuase you are uploading with ajax / dropzone
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            dd($filename);

           // $destinationPath = '/images';

           // $upload_success = Input::file('file')->move($destinationPath, $filename);
           // if ($upload_success) {
          //      return Response::json('success', 200);
           // } else {
            //    return Response::json('error', 400);

           // }
    }

        /*****************
         $input = $request->all();
        $user = Auth::user(); // pulling out logged in user

        if ($file = $request->file('photo_id'))
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('resources/images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id; // inserting photo id
        }

        $user->houses()->create($input);
        return redirect('/');
         ***********************
         */

        /*foreach($files as $file)
        {
            $file->name = time() . $file->getClientOriginalName();
            $file->move('images', name);

        }
        endforeach */

       // $user = Auth::user();
        // $house = House::create($request->all());
        /*foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';*/


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
