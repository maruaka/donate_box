<!--<x-app-layout>-->
<!--  <x-slot name="header">-->
<!--    <h2 class="font-semibold text-xl text-gray-800 leading-tight">-->
<!--      {{ __('Create New Blog') }}-->
<!--    </h2>-->
<!--  </x-slot>-->

<!--  <div class="py-12">-->
<!--    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">-->
<!--      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
<!--        <div class="p-6 bg-white border-b border-gray-200">-->
<!--          募金ありがとうございます-->
<!--           <a href="{{ route('blog.index')}}" class="shiny-btn2">応援する</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</x-app-layout>-->



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku-suku</title>
    <link rel="stylesheet" href="{{ secure_asset('css/thanks.css') }}">
        <link rel="icon" href="{{ secure_asset('images/favicon.ico') }}">
</head>

<body>
    <header>
        <h1>
            <a href="{{ route('blog.index')}}"><img class="logo-mini" src="{{ secure_asset('/images/logo-mini.png')}}" alt=""></a>
        </h1>
        <nav class="pc-nav">
            <ul>
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
            </ul>
        </nav>
    </header>


    <div class="wrapper">
        <!-- コンテンツ -->
        <div class="contents-wrapper">
           
            <!-- テーブルプロジェクト記事ここまで -->
       <div class="thanks-wrapper">
           <div class="thanks-box">
           <img src="{{ secure_asset('images/thanks.png') }}" alt="">
           </div>
          <!--         <div class="bt-box">-->
          <!--<button type="submit"-->
          <!--  class="">-->
          <!--  <a href="{{ route('blog.index')}}" class="shiny-btn2">応援する</a>-->
            
          <!--</button>-->
          

            <a href="{{ route('blog.index')}}" class="shiny-btn2"><div class="bt-box"> 戻る</div></a>

            
          <br>
          <br>
          <br>
        <!--</div>-->
    </div>






            
        <div class="push"></div>
        <!-- ここまでくくってあげないとズレる -->
    </div>

    <footer class="footer">
        <div class="Copyright">Copyright © 2021, SUKU-SUKU All Right Reserved Anup</div>
    </footer>
</body>

</html>