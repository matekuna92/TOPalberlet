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

</head>


<body>

@include('layouts.header')

<div class="header-content">


</div>

<section id="parallax" data-type="background" data-speed="4">
        <div class="jumbotron">
            <h1 class="jumb-h1"> TOP albérlet </h1>
            <p class="jumb-p"> Válasszon a legjobb ajánlatok közül ! </p>
        </div>

</section>

<div class="main-container">

    <div class="row">

        <div class="col-md-3 main-left" style="background-color: lightgrey;">

            <div class="search-box">

                <!-- <form action="/" method="POST" id="searchForm"> using laravel style form below -->
            {!! Form::open(['url' => '/', 'method' => 'POST','id'=>'searchForm']) !!}

                    <!-- SSRF protection -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="city"> Város </label>
                        <input class="form-control" id="city" name="city" rows="20" placeholder="Város">  </input>
                    </div>

                    <div class="form-group">

                        <label for="formGroupExampleInput2"> Ár </label>
                        <div class="input-narrow">
                            <input class="form-control col-xs-4" id="formGroupExampleInput2" placeholder="Min" name="minprice" type="text">
                        </div>

                        <div class="input-narrow">
                        <input type="text" class="form-control col-xs-4" id="formGroupExampleInput2" placeholder="Max" name="maxprice">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="maxrooms" class="maxrooms"> Max szobák száma </label>
                        <input class="form-control" id="maxrooms" name="maxrooms" rows="3" placeholder="Max. szobák száma">  </input>
                    </div>

                    <button type="submit" class="btn btn-primary"> Keresés </button>



               {!! Form::close() !!}
              <!--  </form> -->

            </div>

    </div>

        <div class="col-md-7 main-right">

        @if($posts)

            @foreach($posts as $post)       <!-- Többesszám a controller miatt, ott definiáltuk ezt a változót !
                                            amely a Post modellt tartalmazza ... ugyanígy jártunk el a myposts oldalon is -->
                <div class="main-item img-rounded"  style="background-image: url({{$post->photo ? $post->photo->file : 'http://via.placeholder.com/300x210'}});background-size:cover;">

                    <h3 class="cityname"> {{$post->city}} </h3>
                    <h5 class="street"> {{$post->street}} </h5>
                    <h5 class="price"> {{$post->price}} Ft </h5>
                    <h5 class="size"> {{$post->size}} m2</h5>
                    <h5 class="rooms"> {{$post->rooms}} szoba </h5>
                    <h5 class="date"> Hirdetés dátuma: {{$post->created_at}}</h5>

                    <td class="details"> <a href="{{route('post',$post->id)}}" class="detalisLink">
                            <button class="detailsButton"> Részletek </button> </a> </td>

                </div>

                @endforeach
                @endif

                {{$posts->render()}}

        </div>

    </div>

    <br>

</div>


@include('layouts.footer')

<script>

    /* Testing, if jQuery working after site loading */
    /*$( document ).ready(function() {
        console.log( "ready!" );
    });

    $( document ).ready(function()
    {
        $(".detalisButton").hover = function ()
        {
            $this.style.backgroundColor = "darkgrey"; /* Not working
        }
    })      */


</script>

</body>
</html>
