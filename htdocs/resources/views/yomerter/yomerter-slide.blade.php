@extends('layouts.app')

@section('content')
<div class="container">
    <h6>今の気分は？</h6>
    <div class="yomerter" id="yomerter">
        <img src="./img/yometer_face.png" alt="ヨメータ―" class="yomerter">
        <img src="./img/pushpin.png" alt="ピン" class="pin animate-pin" id="pin">
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
            <input type="hidden" name="physicalCondition" value="" id="physicalCondition">
            <input type="hidden" name="heartCondition"    value="" id="heartCondition">
        </div>        
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#yomerter').click(function (e){
            //データに保持する為、ピンを置いた場所の相対位置を割合で取得する。
            var areaOffset = $('#yomerter').offset();
            var offsetTop  = ((e.pageY)-(areaOffset.top));
            var offsetLeft = ((e.pageX)-(areaOffset.left));
            let top        = Math.round(offsetTop  / $(this).height() * 100);
            let left       = Math.round(offsetLeft / $(this).width()  * 100);
            
            //ピンのアニメーションの再起動の為、要素をCloneして挿入する。
            var pin     = $('#pin'),
            newpin      = pin.clone(true);
            pin.before(newpin);
            pin.remove();
            $('#pin').css('top' ,top  + '%');
            $('#pin').css('left',left + '%');
            
            $('#heartCondition').val(top);
            $('#physicalCondition').val(left);
        });
    </script>
@endsection