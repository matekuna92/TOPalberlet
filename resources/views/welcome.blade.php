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

    <!-- Latest compiled and minified CSS
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

-->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


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

@include('layouts.header')

<div class="header-content">


</div>

        <div class="jumbotron">
            <h1 class="jumb-h1"> TOP albérlet </h1>
            <p class="jumb-p"> Válasszon a legjobb ajánlatok közül ! </p>
        </div>

<div class="main-container">

    <div class="row">

        <div class="col-md-3 main-left">

            <div class="search-box">

                <form>

               <!--     <div class="form-group">
                        <label for="exampleSelect1"> Megye </label>
                        <select class="form-control" id="exampleSelect1">
                            <option> Megye 1 </option>
                            <option> Megye 2 </option>
                            <option> Megye3 </option>
                            <option> Megye 4 </option>
                            <option> Megye 5 </option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="exampleSelect2"> Város </label>
                        <select multiple class="form-control" id="exampleSelect2">
                            <option> Város 1 </option>
                            <option> Város 2 </option>
                            <option> Város 3 </option>
                            <option> Város 4 </option>
                            <option> Város 5 </option>
                        </select>
                    </div>
                    -->
                    <div class="form-group">
                        <label for="City" class="City"> Város </label>
                        <input class="form-control" id="City" rows="20">  </input>
                    </div>

                    <div class="form-group">

                        <label for="formGroupExampleInput2"> Ár </label>
                        <div class="input-narrow">
                            <input class="form-control col-xs-4" id="formGroupExampleInput2" placeholder="Min" type="text">
                        </div>

                        <div class="input-narrow">
                        <input type="text" class="form-control col-xs-4" id="formGroupExampleInput2" placeholder="Max">

                    </div>

                    <div class="form-group">
                        <label for="MaxPrice" class="MaxPrice"> Max szobák száma </label>
                        <input class="form-control" id="MaxPrice" rows="3">  </input>
                    </div>

               <!--     <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Check me out
                        </label>
                    </div>
                -->
                    <button type="submit" class="btn btn-primary"> Keresés </button>

                    </div>
                </form>
        </div>

    </div>

        <div class="col-md-7 main-right">

        @if($posts)

            @foreach($posts as $post)

            <!--    <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th> City </th>
                        <th> Street </th>
                        <th> Type </th>
                        <th> Category </th>
                        <th> Price </th>
                        <th> Size </th>
                        <th> Rooms </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> {$post->city}} </td>
                        <td>{$post->street}}</td>
                        <td> {$post->type}}</td>
                        <td> {$post->category}}</td>
                        <td> {$post->price}}</td>
                        <td> {$post->size}}</td>
                        <td> {$post->rooms}}</td>
                    </tr>
                    </tbody>
                </table>
            -->

                <div class="main-item" style="background-image: url({{$post->photo ? $post->photo->file : 'http://via.placeholder.com/300x210'}});background-size:contain;">

                    <h3 class="cityname"> {{$post->city}} </h3>
                    <h4 class="street"> {{$post->street}} </h4>
                    <h4 class="price"> {{$post->price}} Ft </h4>
                    <h4 class="size"> {{$post->size}} m2</h4>
                    <h4 class="rooms"> {{$post->rooms}} szoba </h4>
                    <h5 class="date"> Hirdetés dátuma: {{$post->created_at}}</h5>

                    <!-- <img src="{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}"> -->
                    <!-- <input id="addButton" type="button" value="Kedvencekhez adás"> -->

                </div>



                @endforeach
                @endif

                {{$posts->render()}}

        </div>

    </div>
    <br>

  <!--  Kép : <img height="50" src="{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}"> -->

</div>




</body>








</html>
