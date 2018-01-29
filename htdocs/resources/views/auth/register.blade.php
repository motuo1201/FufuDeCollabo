@extends('layouts.app')

@section('content')

<form class="form-horizontal" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-xs-12 col-md-6 bg-danger" style="color: white;height:100vh">
            <h2>あなたの登録ページ</h2>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">お名前</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

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
                <label for="password-confirm" class="col-md-4 control-label">Password(確認用)</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <label for="position" class="col-md-4 control-label">あなたはどっち？</label>
                <div class="col-md-6">
                    <select name="position" class="form-control ">
                        <option>妻</option>
                        <option>夫</option>
                    </select>                    
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <a href="#partner"><img src="./img/arrowDown.png" alt="次へ" class="bound"></a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 bg-primary" style="color:white;height:100vh" id="partner">
            <h2>パートナーの登録ページ</h2>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">お名前</label>

                <div class="col-md-6">
                    <input id="partners-name" type="text" class="form-control" name="partners-name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="partners-email" type="email" class="form-control" name="partners-email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="partners-password" type="password" class="form-control" name="partners-password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Password(確認用)</label>

                <div class="col-md-6">
                    <input id="partners-password-confirm" type="password" class="form-control" name="partners-password_confirmation" required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning btn-block" style="height: 60px;position: absolute;bottom:0;">
                    会員登録    
                </button>
            </div>
        </div>
    </div>
</form>

@endsection

@section('script')
<script type="text/javascript">
$(function(){
	$('a[href^="#"]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});
</script>
@endsection