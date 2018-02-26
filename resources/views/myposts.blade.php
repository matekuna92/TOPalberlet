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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <script src="js/jquery-3.2.1.min.js"> </script>

</head>

<body>

@include('layouts.header')

@if(Auth::guest())

    <div class="container">

        <h1> A saját hirdetések megtekintéséhez be kell jelentkeznie ! </h1>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Bejelentkezés </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label"> E-mail </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label"> Jelszó </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Emlékezz rám
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Bejelentkezés
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Elfelejtette a jelszót ?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@else

    <div class="container">

        <h1 class="uploaderName"> <u><b> {{ $user->name }} </b> felhasználó feltöltései </u></h1> <br>

    </div>

    <div class="main-container">

        <div class="row">

            <div class="col-md-3 main-left"> <!-- helyfoglalás miatt üres div, posztok az md-7-ben lesznek -->

            </div>

            <div class="col-md-7 main-right"> <!-- főloldalhoz hasonló elrendezés -->

                @if($user->posts)          <!-- A $userst a kontrollerben definiáltuk ugyanúgy, mint a főoldalon, a posts pedig szintén a
                                        definiált változót jelenti, amely egyébként is a posts() függvényt hívja meg a User modellből -->
                    @foreach($user->posts as $post)

                        <div class="main-item img-rounded"  style="background-image: url({{$post->photo ? $post->photo->file : 'http://via.placeholder.com/300x210'}});background-size:cover;">

                            <h3 class="cityname"> {{$post->city}} </h3>
                            <h5 class="street"> {{$post->street}} </h5>
                            <h5 class="price"> {{$post->price}} Ft </h5>
                            <h5 class="size"> {{$post->size}} m2</h5>
                            <h5 class="rooms"> {{$post->rooms}} szoba </h5>
                            <h5 class="date"> Hirdetés dátuma: {{$post->created_at}}</h5>

                            <td class="details"> <a href="{{route('post',$post->id)}}" class="detalisLink">
                                    <button class="detailsButton float"> Részletek </button> </a> </td>
                            <td class="editPost"> <a href="{{route('edit',$post->id)}}" class="detalisLink">
                                    <button class="detailsButton float"> Szerkesztés </button> </a> </td>


                        </div> <!-- eredetileg a div-en belül volt a foreach, úgy egymás alatt jelent meg a div-et nem nézve !!!-->
                    @endforeach

                    @else

                        <div class="container">

                            <h2> Ez a felhasználó még nem töltött fel hirdetéseket! </h2>

                        </div>

                    @endif

            </div>


        </div>

    </div>

@endif

    @include('layouts.footer');

</body>
</html>
