@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 120px">
    <h6>今の気分は？</h6>
    <div class="yomerter" id="yomerter">
        <img src="./img/yometer_face.png" alt="ヨメータ―" class="yomerter">
        <img src="./img/pushpin.png" alt="ピン" class="pin" id="pin">
    </div>
    <div class="row">
        <div>
            <p>今の気持ちを伝えましょう。(任意)</p>
            <input type="text" name="partnersComment" placeholder="アイスが食べたいです！" class="form-input col-xs-12">
        </div>        
    </div>
    <div class="row" style="padding-top: 20px">
        <div class="col-md-12">
            <input type="submit" class="btn btn-block btn-success" value="パートナーに思いを伝える！">
        </div>        
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#yomerter').click(function (e){
            var areaOffset = $('#yomerter').offset();
            var offsetTop = ((e.pageY)-(areaOffset.top));
            var offsetLeft = ((e.pageX)-(areaOffset.left));
            
            $('#pin').css('top',offsetTop);
            $('#pin').css('left',offsetLeft);
        });
    </script>
@endsection