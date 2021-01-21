<!--<x-guest-layout>-->
<!--    <x-auth-card>-->
<!--        <x-slot name="logo">-->
<!--            <a href="/">-->
<!--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />-->
<!--            </a>-->
<!--        </x-slot>-->

        <!-- Validation Errors -->
<!--        <x-auth-validation-errors class="mb-4" :errors="$errors" />-->

<!--        <form method="POST" action="{{ route('register') }}">-->
<!--            @csrf-->

            <!-- Name -->
<!--            <div>-->
<!--                <x-label for="name" :value="__('Name')" />-->

<!--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />-->
<!--            </div>-->

            <!-- Email Address -->
<!--            <div class="mt-4">-->
<!--                <x-label for="email" :value="__('Email')" />-->

<!--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />-->
<!--            </div>-->

            <!-- Password -->
<!--            <div class="mt-4">-->
<!--                <x-label for="password" :value="__('Password')" />-->

<!--                <x-input id="password" class="block mt-1 w-full"-->
<!--                                type="password"-->
<!--                                name="password"-->
<!--                                required autocomplete="new-password" />-->
<!--            </div>-->

            <!-- Confirm Password -->
<!--            <div class="mt-4">-->
<!--                <x-label for="password_confirmation" :value="__('Confirm Password')" />-->

<!--                <x-input id="password_confirmation" class="block mt-1 w-full"-->
<!--                                type="password"-->
<!--                                name="password_confirmation" required />-->
<!--            </div>-->

<!--            <div class="flex items-center justify-end mt-4">-->
<!--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">-->
<!--                    {{ __('Already registered?') }}-->
<!--                </a>-->

<!--                <x-button class="ml-4">-->
<!--                    {{ __('Register') }}-->
<!--                </x-button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </x-auth-card>-->
<!--</x-guest-layout>-->




<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>suku-suku</title>
  <link rel="stylesheet" href="{{ secure_asset('css/donate.css')}}">
  <link rel="icon" href="{{ secure_asset('images/favicon.ico')}}">
  <!-- キランとひかるボタン用リンク -->
  <!-- <link rel="stylesheet" href="css/_kiran-bt.css"> -->
  <link rel="stylesheet" href="css/bt.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
  <header>
    <h1>
      <a href="{{ route('blog.index')}}"><img class="logo-mini" src="{{ secure_asset('/images/logo-mini.png') }}" alt=""></a>
    </h1>
    <nav class="pc-nav">
      <ul>
         <li><a href="{{ route('blog.index')}}">TOP</a></li>
        <li><a href="{{ route('blog.create')}}" class="">投稿者様投稿ページ</a></li>
        
      </ul>
    </nav>
  </header>
  
  

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

  <div class="all-wrapper">


   
      <div class="wrapper">
        <div class="text-box">
          <img src="{{ secure_asset('/images/watering-plants.png') }}" alt="">
          <p>投稿希望者様はこちらから登録<br>
          をお願いします。<br>
            ユーザー登録後プロジェクト投稿<br>
            ページにつながります。</p>
        </div>
        <br>


        <div class="form-box">
             <x-auth-session-status class="mb-4" :status="session('status')" />
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form action="{{ route('register') }}" method="POST">
            @csrf 
         
          <!--<div class="form_input">-->
            <!--<label for="name">お名前　</label>-->
            <!--<input type="text" name="name" id="name">-->
          <!--</div>-->
          <div class="form_input">
            <label for="name">お名前　</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        
          <div class="form_input">
            <label for="email">メール　</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus />
        </div>
        
            <div class="form_input">
                <label for="password">password</label>

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            
         <div class="form_input">
            <label for="password_confirmation">Confirm</label>
                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
           </div>
<br>
        </div>
        
       
         
        <div class="bt-box">
          <button type="submit"
            class="btn">
            登録
          </button>
        </div>
    </form>

  </div>

  </div>


  <div class="push"></div>
  <!-- ここまでくくってあげないとズレる -->

  <br>


  <footer class="footer">
    <div class="Copyright">Copyright © 2021, SUKU-SUKU All Right Reserved Anup</div>
  </footer>

</body>

</html>