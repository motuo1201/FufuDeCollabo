@extends('layouts.app')

@section('content')

<dev class="vertical-center">
    <div class="col-xs-12">
        <h3>利用規約</h3>
        <p class="text-danger">登録前にご一読下さい。</p>
        <p>1.夫婦DeCollaboは、無料で提供されています。当サイトを利用したウェブサイトの閲覧や登録については、
            ユーザーご自身の責任において行っていただきますようお願いいたします。
            当サイトの御利用につき、何らかのトラブルや損失・損害等につきましては一切責任を問わないものとします。</p>
        <p>2.当Webサイトのコンテンツの作成および配信に関与する者は、当サイトの利用によって生じたあらゆる損害に対して、
            一切の責任を負いません。</p>
        <p>3.当サイトに存在する、文章・画像・動画等の著作物の情報を無断転載することを禁止します。</p>

        <a href="{{route('choice-position')}}">規約に同意して登録画面へ進む</a>
    </div>
</dev>

@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection