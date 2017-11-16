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

    <!-- BX SLIDER -->
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<div>

@include('layouts.header')

@section('content')

    <div class="container"">

        <div class="mainframe">

           <div class="imgframe" style="background-image: url({{$post->photo->file}});background-repeat:no-repeat;">

           </div>

            <div class="textframe">

            <h5> {{$post->body}} </h5>
            <h5> Város: {{$post->city}} </h5>

            <ul class="list">

                <li><h5> Utca: {{$post->street}} </h5></li>
                <li><h5>  Típus: {{$post->type}} </h5></li>
                <li><h5>  Kategória: {{$post->category}} </h5></li>
                <li><h5>  Ár: {{$post->price}} Ft </h5></li>
                <li><h5>  Méret: {{$post->size}} m2 </h5></li>
                <li><h5>  Szobák száma: {{$post->rooms}} </h5></li>
                <li><h5>  Bútorok: {{$post->empty}} </h5></li>
                <li><h5>  Lakás típusa: {{$post->housetype}} </h5></li>
                <li><h5>  Fűtés: {{$post->heating}} </h5></li>

            </ul>
            <!-- Feltöltő: <a href="#"> {$post->user()->name}} </a> -->

            </div>

        </div>

    </div>

</div>

</body>
</html>