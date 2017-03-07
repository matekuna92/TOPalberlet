<!DOCTYPE html>
<html>

<head>

    <title> LoSo - Simple, Clean And Responsive </title>

    <!-- Basic Search Engine Optimalization -->
    <meta name="description" content="Simple, clean, responsive website with html5, css3, JS, jQuery, and Bootstrap">
    <meta name="keywords" content="web, design, html5, css3, javascript, jquery, bootstrap, development">

    <meta name="viewport" content="width=device-width" initial-scale="1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <!-- CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- BX SLIDER -->
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>


<body>

<!-- HEADER SECTION -->
<header class="header" id="HOME">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#loso-example-navbar-collapse-1" aria-expanded="false">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <!-- SMALL SIZE LOGO -->
                    <img class="img-responsive homelogo" src="images/homeicon.png" alt="logo">

                </a> <span class="hometext"> TOPalbérlet </span>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="loso-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <!-- section ID HREF -->
                    <li><a href="/" class="nav-item"> KEZDŐLAP </a></li>
                    <li><a href="/kereses" class="nav-item"> KERESÉS </a></li>
                    <li><a href="/feltoltes" class="nav-item"> HIRDETÉS FELADÁS </a></li>
                    <li><a href="/kedvencek" class="nav-item"> KEDVENCEK </a></li>
                    <li><a href="/bejelentkezes" class="nav-item"> BEJELENTKEZÉS </a></li>
                    <li><a href="/regisztracio" class="nav-item"> REGISZTRÁCIÓ </a></li>

                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="header-overlay">

        <div class="container header-container"> <!-- extra class for getting height in js  -->

            <div class="row">

                <div class="col-md-12">

                </div>

            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="header-text">

                        <!-- Title&Description -->
                        <h1> A clean and modern responsive website </h1>
                        <p> First paragraph </p>

                    </div>

                    <div class="header-buttons">

                        <a class="btn btn-download wow fadeInLeft" href="#"> Download </a>
                        <a class="btn btn-tour wow fadeInRight" href="#"> Take A Tour
                            <i class="fa fa-angle-down" aria-hidden="true"></i>  </a>

                    </div>

                </div>

                <div class="col-md-3 col-md-offset-1"> <!-- colmd4 túl nagy helyet foglalt, offsettel oldjuk meg -->

                    <div class="header-iphone">

                        <img class="img-responsive" src="images/iphone-header.png">

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>

    </body>
</html>
