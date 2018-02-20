@extends('layouts.app')

@section('content')

<h3>あなたはどちら？</h3>
<div class="vertical-center">
    <div class="text-center col-xs-12">
        <form action="{{route('choice-position')}}" method="POST">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary btn-block" value="夫" style="height: 15vh" name="position">
            <input type="submit" class="btn btn-warning btn-block" value="妻" style="height: 15vh" name="position">
        </form>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection