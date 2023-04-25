<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/login.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/logout.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">

    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="{{ asset('/js/script.js') }}"></script>
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
</head>
<body>
    <header>
        <div id = "head">
            <h1><a href="/top"><img class="atlas-logo" src="images/atlas.png"></a></h1>
                <div class="accordion">
                    <div class="accordion-container">
                        <div class="accordion-item">
                            <div class="accordion-user">
                                <div class="accordion-title js-accordion-title"><p    class="accordion-name">admin さん</p></div>
                                <img class="accordion-icon" src="images/icon1.png">
                            </div>
                            <div class="accordion-content">
                                <ul>
                                    <li><a href="/top">HOME</a></li>
                                    <li><a href="/profile">プロフィール編集</a></li>
                                    <li><a href="/logout">ログアウト</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>〇〇さんの</p>
                <div>
                <p>フォロー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="/followlist">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="/followlist">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a href="/user">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>

    <!-- <script src="JavaScriptファイルのURL"></script> -->
</body>
</html>
