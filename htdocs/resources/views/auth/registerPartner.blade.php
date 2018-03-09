@extends('layouts.app')

@section('content')
<form class="form-horizontal text-warning" method="post" action="{{ route('register') }}">
    <div class="container" style="height: 100vh">
        {{ csrf_field() }}
        @component('auth.registerComponent')
            {{Session::get('first-position')==='夫'?'妻':'夫'}}の登録ページ
        @endcomponent
        <div class="form-group">
            <input type="submit" class="btn btn-warning btn-block" style="height: 60px;bottom: 0;"
                   value="夫婦の情報を登録する！">
        </div>
    </div>
</form>    
@endsection

@section('script')
@endsection