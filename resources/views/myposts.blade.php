<?php
/**
 * Created by PhpStorm.
 * User: M3talc0re
 * Date: 2017. 11. 17.
 * Time: 20:46
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
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <script src="js/jquery-3.2.1.min.js"> </script>


</head>


<body>

@include('layouts.header')

<div class="container">

    <h1 class="uploaderName"> <u><b> {{ $users->name }} </b> felhasználó feltöltései </u></h1>

    <div class="posts">

        @if($users->posts)          <!-- A $userst a kontrollerben definiáltuk ugyanúgy, mint a főoldalon, a posts pedig szintén a
                                    definiált változót jelenti, amely egyébként is a posts() függvényt hívja meg a User modellből -->
            @foreach($users->posts as $post)
                <ul>

                    <li class="main-item"> <img src="{{$post->photo->file}}">   </li>

                </ul>

            @endforeach

         @else

            <h2> Ez a felhasználó még nem töltött fel hirdetéseket! </h2>

         @endif

    </div>

</div>

@include('layouts.footer');

</body>
</html>
