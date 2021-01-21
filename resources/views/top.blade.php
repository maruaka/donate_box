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
                <!--<li></li><a href="{{ route('blog.create')}}" class="">投稿者さま</a></li>-->

                
                 @if (Route::has('login'))
               
                    @auth
                        <!--<li></li><a href="{{ url('/dashboard') }}">Dashboard</a></li>-->
                        
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
            <h2>STORY</h2>
            <p>あるところに一人の女の子がいました。<br>
                お花が大好きなのに、ズボラでお世話ベタ。<br>
                いつの間にか、枯らしちゃう。<br>
                そしたら、ママが言いました。</p>
            <span>「みんなで一緒に育てたら？」</span>
            <p>なるほど！！　ナイスアイデア！！<br>
                みんなで育てると楽しいし、成長も早い。<br>
                ここを見たみんな、手助けして！<br>
                一緒にプロジェクトの木を育てよう！！！！</p>
            <br>
       
        </div>
        <!-- ストーリー画面ここまで -->


        <!-- サービス説明画面ここから -->
<div class="background_three">
        <div id="service">
   
        <div class="setsumei-box">
            <h2>プロジェクトの木の育て方と支援のしかた</h2>
            <p>支援をするたび、プロジェクトの木が成長します。
                すくすく育てて、みんなで成長を見守ろう！<br>
                10募金ごとに10💗をGET。<br>
                SNSで活動を広めていただくと、みなさんの愛情でどんどん大きく！<br>
                支援の輪が広がります。
            </p>
        </div>

            <div class="setumei-img-box">
                <img class="setsumei" src="{{ secure_asset('/images/setsumei-.png') }}" alt="">
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
