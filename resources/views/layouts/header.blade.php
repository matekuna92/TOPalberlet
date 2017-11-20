 <!-- HEADER SECTION -->
 <header>

    <div class="header" id="HOME">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <a class="navbar-brand" href="/"> TOPalbérlet
                    </a>
                            <!-- SMALL SIZE LOGO -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right navbar-fixed">


                        <!-- section ID HREF -->
                        <li><a href="/" class="nav-item"> <i class="img-responsive fa fa-home"></i> KEZDŐLAP </a></li>
                        <li><a href="/feltoltes" class="nav-item"> <i class="fa fa-upload" aria-hidden="true"></i> HIRDETÉS FELADÁS </a></li>
                        <li><a href="/hirdeteseim" class="nav-item"> <i class="fa fa-bookmark" aria-hidden="true"></i> SAJÁT HIRDETÉSEK </a></li>
                        <!--<li><a href="/kedvencek" class="nav-item"> <i class="fa fa-star" aria-hidden="true"></i> KEDVENCEK </a></li> -->
                        <li><a href="/regisztracio" class="nav-item"> <i class="fa fa-user" aria-hidden="true"></i> REGISZTRÁCIÓ </a></li>

                        @if(Auth::guest())

                            <li><a href="/bejelentkezes" class="nav-item"> <i class="fa fa-key" aria-hidden="true"></i> BEJELENTKEZÉS </a></li>

                        @else

                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>

                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Kijelentkezés
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>
                                </ul>

                            </li>
                        @endif
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

 </header>


