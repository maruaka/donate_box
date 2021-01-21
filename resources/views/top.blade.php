<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku-suku</title>
   
    <link rel="icon" href="{{ secure_asset('images/favicon.ico') }}">
    <!-- キランとひかるボタン用リンク -->
    <link rel="stylesheet" href="css/_kiran-bt.css">
    <link rel="stylesheet" href="{{ secure_asset('css/test.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>
            <a href="{{ route('blog.index')}}"><img class="logo-mini" src="{{ secure_asset('/images/logo-mini.png')}}" alt=""></a>
        </h1>
        <nav class="pc-nav">
            <ul>
                 @if (Route::has('login'))
               
                    @auth
                        <li> <form method="POST" action="{{ route('logout') }}">
                         @csrf

                         <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                        </x-responsive-nav-link>
                    </form></li>
                    
                    <li><a href="{{ route('blog.create')}}" class="">投稿者様投稿ページ</a></li>
                    
                    @else
                        <li></li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>
                        
                        @if (Route::has('register'))
                            <li></li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">投稿者新規登録はこちらから</a></li>
                        @endif
                    @endauth
                </div>
            @endif
            
          
       
            </ul>
        </nav>
    </header>

    <!-- 背景 -->
    
    <!-- 背景 -->


    <div class="wrapper">


        <!-- top画面部分ここから -->
 <div class="background_one">
        <div class="top-wrapper">
    
         
            <div class="top-box">
               
                <div class="top-right">
                    <img class="top-logo" src="{{ secure_asset('/images/logo.png') }}" alt="">
                </div>
                <div class="top-left">
                    <div class="top_catch_box"><img class="top-catch" src="{{ secure_asset('/images/catch.png') }}" alt=""></div>
                    <div class="tree_box"><img class="tree" src="{{ secure_asset('/images/tree.png') }}" alt=""></div>
                </div>
            </div>
           
            <div class="button-box">

                <a href="#story" class="shiny-btn2">About Us</a>

                <a href="{{ route('blog.index')}}" class="shiny-btn2">応援する</a>

               

                </div>
             </div>
         </div>


        <!-- TOP画面部分ここまで -->


 <div class="background_twe">
        <!-- ストーリー画面ここから -->
        <div id="story"></div>
        <div class="story-box">
           <h2>ABOUT US</h2>

            <h3>みんなの💗でプロジェクトが育つ！<br>
                ずっと「見守り続ける」がコンセプトの<br>
                災害用募金支援サイト SUKU-SUKU</h3>

            <p>SUKU-SUKU(スクスク)は<br>
                「救う×２」と成長する音「スクスク」のダブルミーニング。<br><br>

                「お金」ではなく「想い」を可視化し<br>
                プロジェクトを育て、見守る、がコンセプト。<br><br>

                募金額の大きさを💗で、プロジェクトを木に見立て<br>
                💗を栄養にしてプロジェクトの木が育つイメージです。<br>
                支援活動の成長を、木の大きさで可視化しています。<br><br>

                活動の輪が年輪のように広がり、大きく育ってほしい。<br>
                そんな想いで立ち上げました。<br>
            </p>
            <br>
       
        </div>
        <!-- ストーリー画面ここまで -->


        <!-- サービス説明画面ここから -->
<div class="background_three">
        <div id="service">
   
        <div class="setsumei-box">
            <h2>プロジェクトの木の育て方と支援のしかた</h2>
            <p>支援をするたび、プロジェクトの木が成長します。<br>
               
                SNSで活動を広めていただくと、 支援の輪が広がります。
            </p>
        </div>

            <div class="setumei-img-box">
                <img class="setsumei" src="{{ secure_asset('/images/setsumei-last.png') }}" alt="">
            </div>
        <!--</div>-->

            <div class="button-wrapper">

            <a href="{{ route('blog.index')}}" class="shiny-btn2">育てる木を探しに行く ‣</a>

            </div>
        </div>
    </div> 
        <!--<div class="push"></div>-->
        <!-- ここまでくくってあげないとズレる -->

   
 </div>
    <!--<br>-->

    <!-- サービス説明画面ここまで -->


    <footer class="footer">
        <div class="Copyright">Copyright © 2021, SUKU-SUKU All Right Reserved Anup</div>
    </footer>

</body>

</html>
