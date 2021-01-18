

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku-suku</title>
    <link rel="stylesheet" href="{{ secure_asset('css/project.css') }}">
    <link rel="icon" href="img/favicon.ico">
    <!-- キランとひかるボタン用リンク -->
    <link rel="stylesheet" href="css/_kiran-bt.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
    <!-- ヘッダーここから -->
    <header>
        <h1>
            <a href="index.html"><img class="logo-mini" src="img/logo-mini.png" alt=""></a>
        </h1>
        <nav class="pc-nav">
            <ul>
                <li><a href="index.htmlstory">STORY</a></li>
                <li><a href="index.htmlservice">SERVICE</a></li>
                
            </ul>
        </nav>
    </header>
    <!-- ヘッダーここまで -->



    <!-- top画像部分 -->
    <div class="block_bg"></div>
    <!-- TOP画像ここまで -->



    <!-- ページ全体を囲むラッパー -->
    <div class="wrapper">
        <!-- プロジェクト詳細ここから -->
        <div class="contents-wrapper">

            <div class="title-wrapper">
                <div class="title-left">
                    <h1> {{$blog->title}}</h1>
                    <p> {{$blog->sub_title}}</p>
                </div>

                <div class="title-right">
                    <!-- <section>
                  <img class="character1" src="img/safety.png" alt="">
                   </section> -->
                    <a href="{{ route('donation',$blog->id)}}" class="shiny-btn2">寄付する</a>
                   <section>
                  <!--<img class="character2" src="img/watering-plants.png" alt="">-->
                  
                   </section>
                </div>
            </div>




            <div class="project">
            
                    <div class="right">

                       <img class="character2" src="{{ Storage::url($blog->file_path_one)}}"/>
                            <!--<img src="img/1.jpg" alt="">-->
                        </div>
                    
             

                    <div class="left">

                        <div class="doante_point">
                                <img src="img/bar.png" alt="">
                                <p>
                                    <span>🌱</span>
                                    <!-- ここにポイント -->
                                    　現在：{{$blog->point}}
                                </p>
                            </div>

                            <div class="donate_text_one">
                               <p>　{{$blog->text_one}}
                               </p>

                            </div>

                    </div>
            </div>


            <!-- テーブルプロジェクト記事ここまで -->
       
    
            <!-- ミニコンテンツの２つ ここから-->
            <div class="mini-contents-wrapper">
                <div class="mini-box-right">

                    <div class="donate_image_sub">
                       <img src="{{ Storage::url($blog->file_path_twe)}}"/>
                    </div>

                    <div class="donate_text_sub">
                        <p>{{$blog->text_twe}}
                        </p>
                    </div>
                </div>


                <div class="mini-box-left">

                    <div class="donate_image_sub">
                        <img src="{{ Storage::url($blog->file_path_three)}}"/>
                    </div>
                    <div class="donate_text_sub">
                        <p>　{{$blog->text_three}}
                        </p>
                    </div>
                </div>

            </div>
            <!-- ミニコンテンツの２つ ここまで-->

            <div class="btn">
                <a href="{{ route('donation',$blog->id)}}" class="shiny-btn2">
                <p class="info-text">
                    応援よろしくお願いします
                </p>
            </a>
            </div>
            <!-- PUSHはこの位置でないとダメ どうゆうこと？-->
            <!-- <div class="push"></div> -->
        </div>



    </div>

    </div>

    <footer class="footer">
        <div class="Copyright">Copyright © 2021, SUKU-SUKU All Right Reserved Anup</div>
    </footer>
    <!-- フラッシュアニメ用jsリンク -->
    <script src="js/_flash.js"></script>
</body>

</html>