


<!--<!DOCTYPE html>-->
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<!--    <head>-->
<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
       
     

  
<!--          <form class="mb-6" action="{{ route('donation.store') }}" method="POST" enctype="multipart/form-data">-->
<!--            @csrf-->
<!--            <input class="border py-2 px-3 text-grey-darkest" type="hidden" name="blog_id" id="blog_id" value="{{$blog_id}}">-->
           
<!--            <div class="flex flex-col mb-4">-->
<!--              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="name">name</label>-->
<!--              <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name">-->
<!--            </div>-->
<!--            <div class="flex flex-col mb-4">-->
<!--              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">e-mail</label>-->
<!--              <input class="border py-2 px-3 text-grey-darkest" type="text" name="email" id="email">-->
<!--            </div>-->
<!--            <div class="flex flex-col mb-4">-->
<!--               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="donation">donate</label>-->
               
<!--               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="donation1">5</label>-->
<!--                 <input class="border py-2 px-3 text-grey-darkest" type="radio" name="donation" id="donation1" value="5">-->
<!--	               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="donation2">10</label>-->
<!--	               <input class="border py-2 px-3 text-grey-darkest" type="radio" name="donation" id="donation2" value="10">-->
<!--	               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="donation3">15</label>-->
<!--	               <input class="border py-2 px-3 text-grey-darkest" type="radio" name="donation" id="donation3" value="15">-->
	            
<!--            </div>-->
            
<!--            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">-->
<!--              Create-->
<!--            </button>-->
<!--          </form>-->
      
<!--</html>-->



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>suku-suku</title>
  <link rel="stylesheet" href="{{ secure_asset('css/donate.css')}}">
  <link rel="icon" href="{{ secure_asset('img/favicon.ico')}}">
  <!-- キランとひかるボタン用リンク -->
  <!-- <link rel="stylesheet" href="css/_kiran-bt.css"> -->
  <link rel="stylesheet" href="css/bt.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
  <header>
    <h1>
      <a href="index.html"><img class="logo-mini" src="{{ secure_asset('/images/logo-mini.png') }}" alt=""></a>
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

  <div class="all-wrapper">


   
      <div class="wrapper">
        <div class="text-box">
          <img src="{{ secure_asset('/images/watering-plants.png') }}" alt="">
          <p>いつも応援ありがとうございます！<br>
            おかげさまでスクスク成長しています！！</p>
        </div>
        <br>


        <div class="form-box">
   <form action="{{ route('donation.store') }}" method="POST">
       @csrf 
          <input  type="hidden" name="blog_id" id="blog_id"
            value="{{$blog_id}}">
          <div class="form_input">
            <label for="name">お名前　</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="form_input">
            <label for="email">メール　</label>
            <input type="text" name="email" id="email">
          </div>

          <div class="form_input">
         
            <label for="donation">募金ポイント   </label>
            
              <input class="" type="radio" name="donation" id="donation1" value="5">
              <label class="" for="donation1">5</label>
              <input class="" type="radio" name="donation" id="donation2" value="10">
              <label class="" for="donation2">10</label>
              <input class="" type="radio" name="donation" id="donation3" value="15">
              <label class="" for="donation3">15</label>
          
          </div>
<br>
        </div>
        <div class="bt-box">
          <button type="submit"
            class="btn">
            応援する
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