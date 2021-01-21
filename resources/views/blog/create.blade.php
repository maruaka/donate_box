


<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--        <meta name="csrf-token" content="{{ csrf_token() }}">-->

<!--        <title>{{ config('app.name', 'Laravel') }}</title>-->

        <!-- Fonts -->
<!--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">-->

        <!-- Styles -->
<!--        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">-->
        <!--<link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">-->

        <!-- Scripts -->
<!--        <script src="{{ secure_asset('js/app.js') }}" defer></script>-->
         <!--<script src="{{ secure_asset('js/app.js') }}" defer></script>-->
<!--    </head>-->
<!--    <body class="font-sans antialiased">-->
<!--        <div class="min-h-screen bg-gray-100">-->
            

<!--            <main>-->
<!--               <x-app-layout>-->
<!--  <x-slot name="header">-->
<!--    <h2 class="font-semibold text-xl text-gray-800 leading-tight">-->
<!--      {{ __('Create New Blog') }}-->
<!--    </h2>-->
<!--  </x-slot>-->

<!--  <div class="py-12">-->
<!--    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">-->
<!--      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
<!--        <div class="p-6 bg-white border-b border-gray-200">-->
<!--          @include('common.errors')-->
<!--          <form class="mb-6" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">-->
<!--            @csrf-->
<!--            <div class="flex flex-col mb-4">-->
<!--              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="title">Title</label>-->
<!--              <input class="border py-2 px-3 text-grey-darkest" type="text" name="title" id="title">-->
<!--            </div>-->
<!--            <div class="flex flex-col mb-4">-->
<!--              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="subtitle">subtitle</label>-->
<!--              <input class="border py-2 px-3 text-grey-darkest" type="text" name="subtitle" id="subtitle">-->
<!--            </div>-->
<!--             <div class="flex flex-col mb-4">-->
<!--              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="text_one">text_one</label>-->
<!--              <input class="border py-2 px-3 text-grey-darkest" type="text" name="text_one" id="text_one">-->
<!--            </div>-->
<!--             <div class="flex flex-col mb-4">-->
<!--              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="text_twe">text_twe</label>-->
<!--              <input class="border py-2 px-3 text-grey-darkest" type="text" name="text_twe" id="text_twe">-->
<!--            </div>-->
<!--             <div class="flex flex-col mb-4">-->
<!--              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="text_three">text_three</label>-->
<!--              <input class="border py-2 px-3 text-grey-darkest" type="text" name="text_three" id="text_three">-->
<!--            </div>-->
           
<!--             <div class="flex flex-col mb-4">-->
<!--               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image_one">image</label>-->
<!--                <input class="border py-2 px-3 text-grey-darkest" type="file" name="image_one" accept="image/png, image/jpeg" id='image_one'/>-->
<!--            </div>-->
<!--             <div class="flex flex-col mb-4">-->
<!--               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image_twe">image</label>-->
<!--                <input class="border py-2 px-3 text-grey-darkest" type="file" name="image_twe" accept="image/png, image/jpeg" id='image_twe'/>-->
<!--            </div>-->
<!--             <div class="flex flex-col mb-4">-->
<!--               <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image_three">image</label>-->
<!--                <input class="border py-2 px-3 text-grey-darkest" type="file" name="image_three" accept="image/png, image/jpeg" id='image_three'/>-->
<!--            </div>-->
<!--            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">-->
<!--              Create-->
<!--            </button>-->
<!--          </form>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</x-app-layout>-->

<!--            </main>-->
<!--        </div>-->
<!--    </body>-->
<!--</html>-->



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>suku-suku</title>
  <link rel="stylesheet" href="{{secure_asset('css/donatepost.css')}}">
  <link rel="icon" href="{{secure_asset('img/favicon.ico')}}">
  <!-- キランとひかるボタン用リンク -->
  <!-- <link rel="stylesheet" href="css/_kiran-bt.css"> -->
  <link rel="stylesheet" href="css/bt.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
  <header>
    <h1>
      <a href="{{ route('blog.index')}}"><img class="logo-mini" src="{{secure_asset('/images/logo-mini.png')}}" alt=""></a>
    </h1>
    <nav class="pc-nav">
      <ul>
         <li><a href="{{ route('blog.index')}}">TOP</a></li>
        <li><a href="{{ route('blog.create')}}" class="">投稿者様投稿ページ</a></li>
        
      </ul>
    </nav>
  </header>



  <div class="all-wrapper">
    
      <!-- @csrf -->
      <div class="wrapper">
        <div class="title-box">
          <div>
          <img class="tree" src="{{ secure_asset('images/tree.png')}}" alt="">
          </div>
          <div>
            <h1>プロジェクトの記事を作成しましょう</h1>
            <p>募金を募りたいプロジェクトの内容を投稿してください。<br>
            災害支援など急を要するものに関しては、期間の明記もお願いします。</p>
          </div>
        </div>
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
           @csrf 
        <div class="">
          <label class="" for="title">タイトル</label>
          <input class="" type="text" name="title" id="title">
        </div>
        <div class="">
          <label class="" for="subtitle">サブタイトル</label>
          <input class="" type="text" name="subtitle" id="subtitle">
        </div>
        <div class="">
          <label class="" for="text_one">プロジェクト説明文</label>
          <input class="" type="text" name="text_one" id="text_one">
        </div>
        <div class="">
          <label class="" for="image_one">タイトル用写真</label>
          <input class="" type="file" name="image_one" accept="image/png, image/jpeg"
            id='image_one' />
        </div>

        <div class="">
          <label class="" for="text_twe">小記事１：文章</label>
          <input class="" type="text" name="text_twe" id="text_twe">
        </div>
        <div class="">
          <label class="" for="image_twe">小記事１：写真</label>
          <input class="" type="file" name="image_twe" accept="image/png, image/jpeg"
            id='image_twe' />
        </div>

        <div class="">
          <label class="" for="text_three">小記事２：文章</label>
          <input class="" type="text" name="text_three" id="text_three">
        </div>
        <div class="">
          <label class="" for="image_three">小記事２：写真</label>
          <input class="" type="file" name="image_three"
            accept="image/png, image/jpeg" id='image_three' />
        </div>
        <br>
        <div class="bt-box">
          <button type="submit"
            class="">
            送信する
          </button>
        </div>
      </div>
    </form>
  </div>




  <div class="push"></div>
  <!-- ここまでくくってあげないとズレる -->

  <br>

  <!--<footer class="footer">-->
  <!--  <div class="Copyright">Copyright © 2021, SUKU-SUKU All Right Reserved Anup</div>-->
  <!--</footer>-->

</body>

</html>