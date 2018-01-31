@extends('layouts.app')

@section('content')

<form class="form-horizontal" method="POST" action="{{ route('choice-position') }}">
    {{ csrf_field() }}
    <h3>あなたはどちら？</h3>
    <div class="vertical-center">
        <div class="text-center col-xs-12">
            <div data-toggle="buttons">
                <label class="btn btn-success btn-lg active">
                    <input type="radio" name="position" id="option1" checked value="夫"> 夫
                </label>
                <label class="btn btn-warning btn-lg">
                  <input type="radio" name="position" id="option2" value="妻"> 妻
                </label>
            </div>
            <input type="submit" class="btn btn-block btn-primary" value="情報を登録する">
        </div>
    </div>
</form>
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection