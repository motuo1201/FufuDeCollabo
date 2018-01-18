@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 120px">
    <h6>今の気分は？</h6>
    <input id="feel" type="text" data-slider-id="volumeSlider" 
           data-slider-min="0" data-slider-max="10" data-slider-step="1" 
           data-slider-value="5"
           data-slider-ticks='[0,10]'
           data-slider-ticks-labels='["最悪", "最高！"]' style="width: 100%"/>
    <h6>今の体調は？</h6>
    <input id="condition" type="text" data-slider-id="volumeSlider"
           data-slider-min="0" data-slider-max="10" data-slider-step="1" 
           data-slider-value="5"
           data-slider-ticks='[0,10]'
           data-slider-ticks-labels='["最悪", "最高！"]' style="width: 100%"/>
    <h6>あなたの今の気分はこの辺です</h6>
    <div class="jumbotron yomerter">
        <img src="./img/pushpin.png"  alt="ピン" class="pin" style="top:50%;left:50%">
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
        $(function() {
            $('#feel').slider().on('change', function(e) {
                console.log(e.value);
                setPosition();
            });
            $('#condition').slider().on('change', function(e) {
                setPosition();
            });
            function setPosition(){
                $('.pin').css('top' ,100 - parseInt($('#feel').val())      * 10 + '%');
                $('.pin').css('left',      parseInt($('#condition').val()) * 10 + '%');
            }
        });
    </script>
@endsection