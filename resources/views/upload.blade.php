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

    <form class="mart20" role="form" autocomplete="off" name="kereses" onsubmit="return checkform(this);" method="post" action="/kereses/">
        <input type="hidden" name="post_type" value="kereses" id="post_type">
        <div class="hidden-xs hidden-sm col-md-1 col-lg-1"></div>
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
            <div class="form-group">
                <label class="mar0">Kategória</label>
                <select name="post_hirdetes_subcatid" id="post_hirdetes_subcatid" class="form-control szazp"><option value="4">Eladó lakás</option>
                    <option value="5">Eladó ház</option>
                    <option value="7">Eladó telek</option>
                    <option value="6">Eladó nyaraló</option>
                    <option value="14">Eladó garázs</option>
                    <option value="16">Eladó kereskedelmi/ipari ingatlan</option>
                    <option value="15">Eladó iroda</option>
                    <option value="8">Eladó egyéb ingatlan</option>
                    <option value="9">Kiadó lakás</option>
                    <option value="10">Kiadó ház</option>
                    <option value="11">Kiadó telek</option>
                    <option value="19">Kiadó nyaraló, szálláshely</option>
                    <option value="12">Kiadó garázs</option>
                    <option value="18">Kiadó kereskedelmi/ipari ingatlan</option>
                    <option value="17">Kiadó iroda</option>
                    <option value="20">Kiadó egyéb ingatlan</option>
                </select>
            </div>
            <div class="form-group">
                <label class="mar0">Város</label>
                <input type='hidden' value="" data-init-text='Kezdje begépelni a város nevét!' name='post_search_varos' id='post_search_varos' class="form-control"/>
                <small class="color-grey">választhat több várost vagy kerületet is</small>
            </div>
            <div class="form-group">
                <label class="mar0">Városrész</label>
                <input type='hidden' value="" data-init-text='Kezdje begépelni a városrész nevét!' name='post_search_varosresz' id='post_search_varosresz' class="form-control"/>
            </div>
            <div class="form-group">
                <label class="mar0">Utca</label>
                <input type='hidden' value="" data-init-text='Kezdje begépelni a városrész nevét!' name='post_search_utca' id='post_search_utca' class="form-control"/>
                <small class="color-grey">választhat több lehetőséget is</small>
            </div>
            <div class="form-group">
                <label class="mar0">Ár</label>
                <small>min - max</small>
                <div id="price_elado" class="search_price">millió Ft</div>
                <div id="price_kiado" class="search_price">ezer Ft</div>
                <input name="price_m" type="text" class="form-control" id="price_m">
            </div>
            <div class="form-group">
                <label class="mar0">Keresett kifejezés</label>
                <input type="text" name="search" id="search" class="form-control" value="">
            </div>
            <div class="form-group">
                <label class="mar0">Azonosító</label>
                <input type="text" name="idtosearch" id="idtosearch" class="form-control irobot_id" value="">
            </div>
        </div>
        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1"></div>
        <div class="hidden-xs col-sm-1 col-md-1 col-lg-1"></div>
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
            <span id="wait_span" class="display-none "><img src="/img/loader-ajax2.gif.pagespeed.ce.K9y7PqguPF.gif" alt="Kérem várjon..." class="ajax-loader marb20"></span>
            <span id="result_1" class="display-none"></span>
            <div class="form-group">
                <label class="mar0"><input type="checkbox" name="csak_fenykepek"> Csak fényképes hirdetés</label>
            </div>
            <div class="form-group">
                <label class="mar0"></label>
                <button type="submit" class="btn  btn-primary pull-right" id="kereses">Keresés</button>
            </div>
        </div>
        <div class="hidden-xs hidden-sm col-md-1 col-lg-1"></div>
    </form>

@endif






</body>
</html>