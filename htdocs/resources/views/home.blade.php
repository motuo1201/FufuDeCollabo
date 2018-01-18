@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 120px">
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

                    おめでとう！ログイン出来ました！
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
