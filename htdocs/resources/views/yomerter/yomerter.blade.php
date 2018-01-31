@extends('layouts.app')

@section('content')
<div class="container">
    <h6>今の気分は？</h6>
    <div class="yomerter" id="yomerter">
        <img src="./img/yometer_face.png" alt="ヨメータ―" class="yomerter">
        <img src="./img/pushpin.png" alt="ピン" class="pin animate-pin" id="pin" 
             style="top: {{$latestCondition->mentalCondition}}%;left: {{$latestCondition->physicalCondition}}%">
        <img src="./img/pushpin_partner.png" alt="ピン" class="pin animate-pin" id="pin" 
             style="top: {{$partnersCondition->mentalCondition}}%;left: {{$partnersCondition->physicalCondition}}%"
             data-toggle="tooltip" data-placement="top" 
             title="{{$partner->name}}:{{$partnersCondition->comment or '特にありません'}}">
    </div>
    <form method="POST" action="{{route('yomerter')}}">
        {{csrf_field()}}
        <div class="row">
            <div>
                <p>今の気持ちを伝えましょう。(必須)</p>
                <input type="text" name="comment" placeholder="アイスが食べたいです！" class="form-input col-xs-12"
                       value="{{$latestCondition->comment}}">
            </div>        
        </div>
        <div class="row" style="padding-top: 20px">
            <div class="col-md-12">
                <input type="submit" class="btn btn-block btn-success" value="{{$partner->name}}に思いを伝える！">
                <input type="hidden" name="physicalCondition" value="" id="physicalCondition">
                <input type="hidden" name="mentalCondition"    value="" id="mentalCondition">
            </div>        
        </div>
    </form>

</div>
@endsection

@section('script')
    <script>
        $('.yomerter [data-toggle="tooltip"]').tooltip('show');
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
            
            $('#mentalCondition').val(top);
            $('#physicalCondition').val(left);
        });
    </script>
@endsection
