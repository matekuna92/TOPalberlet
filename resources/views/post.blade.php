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

@section('content')

    <div class="container">

        <h1><u> A hirdetés azonosítója:</u> <b> {{$post->id}} </b></h1>

        <div class="mainframe">

           <div class="imgframe" style="background-image: url({{$post->photo->file}});background-repeat:no-repeat;">

           </div>

            <div class="textframe">

            <h5 class="list-group-item post-body"> {{$post->body}} </h5>
            <h5 class="list-group-item post-city"> <u> Város:</u> {{$post->city}} </h5>

            <ul class="list">

                <li class="li-items"> <h5> Utca: {{$post->street}} </h5></li>
                <li class="li-items"> <h5>  Típus: {{$post->type}} </h5></li>
                <li class="li-items"> <h5>  Kategória: {{$post->category}} </h5></li>
                <li class="li-items"> <h5>  Ár: {{$post->price}} Ft </h5></li>
                <li class="li-items"> <h5>  Méret: {{$post->size}} m2 </h5></li>
                <li class="li-items"> <h5>  Szobák száma: {{$post->rooms}} </h5></li>
                <li class="li-items"> <h5>  Bútorok: {{$post->empty}} </h5></li>
                <li class="li-items"> <h5>  Lakás típusa: {{$post->housetype}} </h5></li>
                <li class="li-items"> <h5>  Fűtés: {{$post->heating}} </h5></li>

            </ul>
            <!-- Feltöltő: <a href="#"> {$post->user()->name}} </a> -->
            </div>

        </div>

        <a href="/"> <button class="backToMain btn btn-danger"> Vissza a főoldalra </button> </a>
        <a href="/hirdeteseim"> <button class="backToMain btn btn-primary"> Vissza a hirdetéseimhez </button> </a>

</div>

        @include('layouts.footer')

</body>
</html>