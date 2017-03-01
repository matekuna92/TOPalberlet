<!--
 * Created by PhpStorm.
 * User: m3talc0re
 * Date: 2016. 11. 05.
 * Time: 22:33
-->

<!DOCTYPE html>
<html lang="en">
<head>

    <title> TOPalbérlet </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
    <a class="navbar-brand"> TOPalbérlet </a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/"> {{ Html::image('images/home.png') }} Kezdőlap <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('kereses')}}"> <img src="images/search.png"> Keresés </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('hirdetesfeladas')}}"> <img src="images/new.png"> Hirdetés feladás </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
    <form class="form-inline float-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-outline-danger" type="submit" id="regButton" data-toggle="modal" data-target="#loginRegModal"> Regisztráció </button>
        <button class="btn btn-outline-success" type="submit" id="loginButton" data-toggle="modal" data-target="#loginRegModal"> Bejelentkezés </button>

        <!-- data-target-nek megadjuk a modal id-jét ! -->

    </form>
</nav>

<!-- /NAVBAR -->

