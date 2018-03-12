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
</head>
<body>
    <div id="app">
        @guest
        {{-- user情報が無いので、トップページには特に何も表示しない。 --}}
        <nav class="navbar navbar-default">
            <div class="bs-component">
                <nav class="navbar navbar-dark bg-warning">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive2" 
                            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="container collapse navbar-toggleable-md" id="navbarResponsive2">
                        <a class="navbar-brand" href="{{route('welcome')}}">トップページ</a>
                        <a class="navbar-brand" href="{{route('login')}}">ログイン画面へ</a>
                    </div>
                </nav>
            </div>
        </nav>
        @else
        <nav class="navbar navbar-default">
            <div class="bs-component">
                <nav class="navbar navbar-dark bg-warning">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive2" 
                            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="container collapse navbar-toggleable-md" id="navbarResponsive2">
                        <a class="navbar-brand" href="{{route('home')}}">トップページ</a>
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
                                    <a class="dropdown-item" href="#">sample</a>
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
        </nav>
        @endguest
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
    <script src="js/bootstrap.min.js"></script>
    @yield('script')
</body>
</html>
