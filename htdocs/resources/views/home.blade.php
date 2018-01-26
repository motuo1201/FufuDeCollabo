@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">メニューかな</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>おめでとう！ログイン出来ました！</p>
                    <p>あなたのパートナーの名前は、{{$partner->name}}さんです。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="{{route('yomerter')}}" method="GET" class="form">
            {{ csrf_field() }}
            <div class="col-md-12">
                <input type="submit" value="ヨメータ―オンライン" class="btn btn-warning btn-block btn-menu-item">            
            </div>
        </form>
    </div>
</div>
@endsection
