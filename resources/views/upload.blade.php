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

@if(Auth::guest())

    <div class="container">

        <h1> Hirdetés feladásához be kell jelentkeznie ! </h1>

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

    @if (count($errors) > 0)
        <div class="alert alert-danger error-div">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container" style="background-color: lightgrey;">

        <h1> Hirdetés feladás </h1>

    <div class="upload-form">

        {!! Form::open(['method'=>'post', 'action'=>'UsersUploadController@store',
        'files' => true, 'enctype' => 'multipart/form-data']) !!}

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
            {!! Form::select('type', ['kiadó' => 'Kiadó', 'eladó' => 'Eladó'], 'kiadó',['class'=>'form-control']) !!}

        </div>

        <div class="form-group col-xs-3">
            {!! Form::label('category','Kategória') !!}
            {!! Form::select('category',['ház'=>'Ház', 'lakás'=>'Lakás', 'garázs'=>'Garázs', 'telek'=>'Telek', 'iroda'=>'Iroda'],
            'ház', ['class'=>'form-control']) !!}

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
            {!! Form::select('empty',['bútorozott'=>'Bútorozott','bútorozatlan'=>'Bútorozatlan'], 'bútorozott', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-xs-3">
            {!! Form::label('housetype','Lakás típusa') !!}
            {!! Form::select('housetype',['tégla'=>'Tégla','panel'=>'Panel'], 'tégla', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-xs-3">

            {!! Form::label('heating','Fűtés') !!}
            {!! Form::select('heating',['cirko'=>'Cirko', 'gázkonvektor'=>'Gázkonvektor', 'távfűtés'=>'Távfűtés', 'távfűtés egyedi méréssel'=>'Távfűtés egyedi méréssel',
             'elektromos'=>'Elektromos', 'házközponti'=>'Házközponti','házközponti egyedi méréssel'=>'Házközponti egyedi méréssel','cserépkályha'=>'Cserépkályha'], 'cirko',
            ['class'=>'form-control']) !!}

        </div>
        <br><br>

        <div class="form-group col-xs-6">
            {!! Form::label('body','Hirdetés szövege') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
        </div>

        <div class="clear"></div>
        <div class="clear"></div>

        <div class="form-group">
            {!! Form::label('photo_id','Kép feltöltése') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Hirdetés feladása',['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

    </div>

    </div>
    </div>
</div>

@endif

@include('layouts.footer')
</body>
</html>



