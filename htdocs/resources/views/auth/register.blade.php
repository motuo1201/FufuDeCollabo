@extends('layouts.app')

@section('content')
<div class="container" style="height: 100vh">
    <form class="form-horizontal text-warning" method="post" action="{{ route('setFirstUser') }}">
        {{ csrf_field() }}
        @component('auth.registerComponent')
            {{session('position')}}の登録ページ
        @endcomponent
        <div class="form-group">
            <input type="hidden" name="position" value="{{session('position')}}">
            <input type="submit" class="btn btn-warning btn-block" style="height: 60px;bottom: 0;"
                   value="{{(session('position')==='夫')?'妻':'夫'}}の登録へ進む">
        </div>
    </form>    
</div>
@endsection

@section('script')
@endsection