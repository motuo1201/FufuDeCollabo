<!DOCTYPE html>
<html>
    <head>
        <title>夫婦でコラボ！</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/scrollmenu.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="wrapper">
            <div class="jumbotron topimage"></div>
            <div class="container">
                <section class="section" id="section1">
                    <div class="row" style="text-align: center">
                        <h5 class="text-mute">伝わらないその想い…</h5>
                        <h5>夫婦でちゃんとシェアしませんか？hoge</h5>
                    </div>
                    <div class="row" style="text-align: center;padding-bottom: 15px">
                        <button class="btn btn-lg btn-default">
                            <a href="{{ route('terms-of-use') }}"><h4>さぁ、始めてみましょう</h4></a>
                        </button>
                        <h6 class="text-danger" style="padding-top: 5px">既に登録済みの方は<a href="{{route('login')}}">こちら</a>から！</h6>
                    </div>
                    <div class="row" style="text-align: center">
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <h4 class="text-warning">妻</h4>                
                        </div>
                        <div class="col-xs-11 col-sm-4 col-md-4">
                            <div class="bs-component">
                                <div class="alert alert-warning">
                                    <p>そんなつもりじゃなかったのに…</p>
                                    <p>なかなか素直に言えなくて…</p>
                                    <p>上手く伝える方法ないかな…</p>                                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-11 col-sm-4 col-md-4">
                            <div class="bs-component">
                                <div class="alert alert-info">
                                    <p>妻の気持ちが分からない…</p>
                                    <p>手伝っているつもりなんだけど…</p>
                                    <p>もうちょっと言い方を…</p>                                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1">
                            <h4 class="text-primary">夫</h4>      
                        </div>
                    </div>

                    <div class="row" style="padding-bottom: 20px;padding-top: 20px;text-align: center">
                        <h6>すれ違いの積み重ねを無くして<br>
                            <a href="https://ja.wikipedia.org/wiki/%E7%94%A3%E5%BE%8C%E3%82%AF%E3%83%A9%E3%82%A4%E3%82%B7%E3%82%B9">
                                産後クライシス
                            </a>                    
                            <br>を乗り越えたい！
                        </h6>
                        <h6>そんな夫婦の為に考えているサービスです</h6>                
                    </div>                
                </section>

                <section class="section" id="section2">
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <h4 class="text-danger">ヨメーターオンライン</h4>
                            </div>
                            <div class="panel-body">
                                <h6 class="text-center">
                                    <p>壁に貼っていたヨメーターがオンラインで登場。<br>
                                        お互いが離れていても、PCやモバイル上で<br>
                                        チェックできます！</p>
                                    <p>妻も夫も今の気持ちをポチっと！更新したら<br>
                                        パートナーのメールに自動送信。</p>
                                    <p>直接顔を合わせたら、その気分になった理由を<br>
                                        ちゃんと聞きましょうね～</p>
                                </h6>  
                            </div>
                        </div>
                        <div class="panel text-center">
                            <a href="{{Route('demo-yomerter')}}">
                                <h4>デモページを見てみる！</h4>
                                <img class="img-responsive" src="img/yometer_face.png" alt="ヨメーター" style="width: 70%;height: 70%">
                            </a>
                        </div>
                    </div>
                </section>
                <section class="section" id="section3">
                    <div class="row" style="padding-top: 40px">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <h4 class="text-danger">夫婦deお仕事共有</h4>
                            </div>
                            <div class="panel-body">
                                <h6 class="text-center">
                                    <p>今までシェアできなかった色んな家事を<br>
                                    夫婦でシェアしましょう！</p>
                                    <p>段取りまで共有すれば、<br>
                                        お互いのストレスもきっと減る(はず)</p>
                                </h6>
                            </div>
                        </div>
                        <div class="panel text-center">
                            <img class="img-responsive" src="img/kaji.png" alt="家事共有">
                        </div>
                    </div>
                </section>
                <section class="section" id="section4" style="height: 100vh">
                    <div class="row" style="padding-top: 40px">
                    <div class="panel">
                        <div class="panel-heading text-center">
                            <h4 class="text-danger">伝えるサービス</h4>
                        </div>
                        <div class="panel-body">
                            <h6 class="text-center">
                                <p>いっそ、言いたいこと言っちゃいましょう！</p>
                                <p>大丈夫です。<br>
                                    AIが優しく言い換えてくれますから。</p>
                                <p>確認してOKならFacebook/twitter/lineへ投入！</p>                            
                            </h6>
                        </div>
                    </div>
                    <div class="panel text-center">
                        <img class="img-responsive" src="img/chat.jpg" alt="本音">
                    </div>
                    <div class="row text-center">
                        <div class="col-xs-5 col-xs-offset-2">
                            <input type="text" id="talk_to_watson" class="form-control" placeholder="話しかける内容">
                        </div>
                        <div class="col-xs-4">
                            <button id="call_watson" class="btn btn-default">話しかける</button>
                        </div>
                    </div>
                </div>
                <div class="row" style="text-align: center">
                    <h4>↓↓登録はこちらから↓↓</h4>
                    <button class="btn btn-block btn-primary"><a href="{{ route('register') }}"><h4>使ってみる！</h4></a></button>
                </div>

                </section>        
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrollmenu.min.js"></script>
        <script src="js/callWatsonAPI.js"></script>
        <script>
        //base setup
        var setupOption = {
            className : 'creative-menu',
            anchorSetup: [
                {
                    backgroundColor: "#dc767d",
                    label: "トップページ",
                    className : 'animate-text',
                    template: '<div class="menu-wrap"><div class="menu"><div class="text-wrap"><%= label %></div></div></div>'
                },         
                {
                    backgroundColor: "#36d278",
                    label: "ヨメーターオンライン",
                    className : 'animate-text',
                    template: '<div class="menu-wrap"><div class="menu"><div class="text-wrap"><%= label %></div></div></div>'
                },
                {
                    backgroundColor: "#22cfc6",
                    label: "お仕事シェア",
                    className : 'animate-text',
                    template: '<div class="menu-wrap"><div class="menu"><div class="text-wrap"><%= label %></div></div></div>'
                },
                {
                    backgroundColor: "#8794a1",
                    label: "伝えるサービス",
                    className : 'animate-text',
                    template: '<div class="menu-wrap"><div class="menu"><div class="text-wrap"><%= label %></div></div></div>'
                }
            ]
        };
        var scrollMenu = ScrollMenu(setupOption);
        
        $('#call_watson').click(function(){
            //WatsonConversationを呼び出し、レスポンスをalertで出力する。(デモ用機能)
            watsonConversation('{{route('conversation_call')}}',$('#talk_to_watson').val(),"")
                .done(function(response){
                    alert(response.output.text);
                }).fail(function(){
                    alert(errorHandler(arguments));
                });
        });
    </script>
    </body>
</html>
