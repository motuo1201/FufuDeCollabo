@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
	<div class="row login_box">
	    <div class="col-md-12 col-xs-12" align="center">
                <div class="line"><h3 style="color: #EDEFF2">ログイン</h3></div>
                <div class="outter"><img src="./img/hakusai.png" class="image-circle"/></div>   
	    </div>
            <div class="col-md-12 col-xs-12 login_control">
                    <div class="control">
                        <div class="label">Email Address</div>
                        <input type="text" class="form-control login-form" placeholder="e-mail@example.com" name="email"/>
                    </div>
                    <div class="control">
                         <div class="label">Password</div>
                         <input type="password" class="form-control login-form" placeholder="パスワード" name="password"/>
                    </div>
                    <div align="center">
                        <input type="submit" class="btn btn-orange btn-block" value="ログイン">
                    </div>
            </div>
        </div>
    </form>
</div>
@endsection
