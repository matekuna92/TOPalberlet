<?php
/**
 * Created by PhpStorm.
 * User: M3talc0re
 * Date: 2017. 11. 19.
 * Time: 21:36
 */
?>

@include('layouts.app')

<!DOCTYPE html>

<html>

<head>
    <!-- Basic Search Engine Optimalization -->
    <meta name="description" content="Simple, clean, responsive website with html5, css3, JS, jQuery, and Bootstrap">
    <meta name="keywords" content="web, design, html5, css3, javascript, jquery, bootstrap, development">

    <meta name="viewport" content="width=device-width" initial-scale="1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

@include('layouts.header')

<!-- Section-nel nem jelenik meg a felirat ... -->

<div class="container">

    <h1><u> Hirdetés szerkesztése </u></h1>

    <br>

    <div class="row">

        <div class="col-sm-3">
            <img src="{{$post->photo->file}}" class="img-responsive">
        </div>


        <div class="col-sm-9">

            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['MyPostsController@update',$post->id], 'files'=>true]) !!}

            <div class="form-group col-xs-3">
                {!! Form::label('city','Város:') !!}
                {!! Form::text('city',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-3">
                {!! Form::label('street','Utca:') !!}
                {!! Form::text('street',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-3">

                {!! Form::label('type','Típus') !!}
                {!! Form::select('type', ['kiadó' => 'Kiadó', 'eladó' => 'Eladó'], null,['class'=>'form-control']) !!}

            </div>

            <div class="form-group col-xs-3">
                {!! Form::label('category','Kategória') !!}
                {!! Form::select('category',['ház'=>'Ház', 'lakás'=>'Lakás', 'garázs'=>'Garázs', 'telek'=>'Telek', 'iroda'=>'Iroda'],
                null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group col-xs-3">
                {!! Form::label('price','Ár:') !!}
                {!! Form::text('price',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-3">
                {!! Form::label('size','Alapterület:') !!}
                {!! Form::text('size',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-3">
                {!! Form::label('rooms','Szobák száma:') !!}
                {!! Form::text('rooms',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-3">
                {!! Form::label('empty','Berendezés') !!}
                {!! Form::select('empty',['bútorozott'=>'Bútorozott','bútorozatlan'=>'Bútorozatlan'], null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-3">
                {!! Form::label('housetype','Lakás típusa') !!}
                {!! Form::select('housetype',['tégla'=>'Tégla','panel'=>'Panel'],null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-xs-3">

            {!! Form::label('heating','Fűtés') !!}
            {!! Form::select('heating',['cirko'=>'cirko', 'gázkonvektor'=>'gázkonvektor', 'távfűtés'=>'távfűtés', 'távfűtés egyedi méréssel'=>'távfűtés egyedi méréssel',
             'elektromos'=>'elektromos', 'házközponti'=>'házközponti','házközponti egyedi méréssel'=>'házközponti egyedi méréssel','cserépkályha'=>'cserépkályha'], null,
            ['class'=>'form-control']) !!}

            </div>

                <div class="form-group col-xs-6">
                    {!! Form::label('photo_id','Kép feltöltése') !!}
                    {!! Form::file('photo_id',['class'=>'form-control']) !!}
                </div>

            <div class="form-group col-xs-6">
                {!! Form::label('body','Hirdetés szövege') !!}
                {!! Form::textarea('body',null,['class'=>'form-control','rows'=>2]) !!}
            </div>

                <div class="form-group">
                    {!! Form::submit('Hirdetés módosítása',['class'=>'btn btn-primary col-sm-6 editButton' ]) !!}
                </div>

            {!! Form::close() !!}

        <!-- delete form -->

            {!!Form::open(['method'=>'DELETE', 'action'=>['MyPostsController@destroy', $post->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Hirdetés törlése',['class'=>'btn btn-danger col-sm-6 deleteButton']) !!}
            </div>

            {!! Form::close() !!}

        </div>

</div>


@include('layouts.footer')

</body>
</html>
