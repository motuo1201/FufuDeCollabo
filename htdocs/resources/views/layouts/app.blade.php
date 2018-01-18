<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>夫婦Deコラボ！</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
</head>
<body>
    <div id="app">
        @guest
        <div class="container">            
            <a class="navbar-brand" href="{{route('welcome')}}">トップページ</a>
        </div>
        @else
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="bs-component">
                    <nav class="navbar navbar-dark bg-danger">
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive2" 
                                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                        <div class="container collapse navbar-toggleable-md" id="navbarResponsive2">
                            <a class="navbar-brand" href="{{route('welcome')}}">トップページ</a>
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">リンク</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">リンク</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown2" 
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</a>
                                    <div class="dropdown-menu" aria-labelledby="supportedContentDropdown2">
                                        <a class="dropdown-item" href="#">高坂 穂乃果</a>
                                        <a class="dropdown-item" href="#">南 ことり</a>
                                        <a class="dropdown-item" href="#">園田 海未</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav form-inline float-lg-right">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown2" 
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-menu" aria-labelledby="supportedContentDropdown2">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="dropdown-item">
                                            ログアウト
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>
        @endguest
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>

    @yield('script')
</body>
</html>
