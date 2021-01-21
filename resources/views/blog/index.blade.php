

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku-suku</title>
    <link rel="stylesheet" href="{{ secure_asset('css/all.css') }}">
    <link rel="icon" href="{{ secure_asset('images/favicon.ico') }}">
    <!-- キランとひかるボタン用リンク -->
    <link rel="stylesheet" href="css/_kiran-bt.css">
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


    <div class="wrapper">
        <!-- コンテンツ -->
        <div class="contents-wrapper">
            <div class="top_text">
                <h1>応援するプロジェクトを探す</h1>
                <p>活動力が足りないプロジェクトは、まだ苗木のまま。みんなで一緒にプロジェクトを育てよう！<br>
                    支援したい村、応援したい土地、育てたい木を探してください。</p>

            </div>

            <!-- テーブルプロジェクト記事ここから -->
           @foreach ($blogs as $blog)
           <div class="project_box">
            <a href="{{ route('blog.show',$blog->id)}}">
            <table class="project">
                <tr>
                    <td class="td-right"><img class="all-img" src="{{asset('storage/storage/images/'.$blog->file_name_one)}}" class="d-block rounded-circle mb-3"/></td>
                    <!--<td class="td-right"><img class="all-img" id="mytree" src="{{ secure_asset('/images/ki.png')}}"/></td>-->
                    
                    <td class="td-left">
                        <div>
                             <div class="point_box">
                                　<p>現在の💗️：
                                  @if($blog->points == '')
                                     0 point</p>
                                @elseif($blog->points > '0')
                                   {{$blog->points}} point</p>
                                @endif
                            </div>
                            <div class="project_title">
                                　{{$blog->title}}
                            </div>
                           
                           
                            <div class="text_box">
                                <p class="data">👨投稿者：{{$blog->user_name}}</p>
                                　{{$blog->text_one}}
                                　
                            </div>
                               
                             
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            </a>
            
            <!--削除ボタン-->
             <!--<form action="{{ route('blog.destroy',$blog->id) }}" method="POST">-->
             <!--       @method('delete')-->
             <!--       @csrf-->
             <!--       <button type="submit" class="mr-2 ml-2 text-sm bg-black hover:bg-gray-900 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline">-->
             <!--         <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="white">-->
             <!--           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />-->
             <!--         </svg>-->
             <!--       </button>-->
             <!--     </form>-->
                  <!--ここまで-->
            
            </div>
             @endforeach
            <!-- テーブルプロジェクト記事ここまで -->
           
       
       
        </div>
                   
    <footer class="footer">
        <div class="Copyright">Copyright © 2021, SUKU-SUKU All Right Reserved Anup</div>
    </footer>
    
    
    
    
    <script>
        
        // let pic_src = new Array("img/1.jpg","img/2.jpg","img/3.jpg");
        // let num = -1;

        
        // function slideshow() {
        //     if(num == 2){
        //         num = 0;
        //     } else {
        //         num ++;
        //     }
        //     document.getElementById("mypic").src = pic_src[num];
        //     setTimeout("slideshow()",3000);
        // }
        
        //  slideshow();
         
         
    </script>
    
    
    
    
</body>

</html>