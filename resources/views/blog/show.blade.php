

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku-suku</title>
    <link rel="stylesheet" href="{{ secure_asset('css/project.css') }}">
    <link rel="icon" href="img/favicon.ico{{ secure_asset('images/favicon.ico') }}">
    <!-- キランとひかるボタン用リンク -->
    <link rel="stylesheet" href="css/_kiran-bt.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>
</head>

<body>
    <!-- ヘッダーここから -->
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
    <!-- ヘッダーここまで -->



    <!-- top画像部分 -->
    <div class="block_bg">
        
    </div>
    <!-- TOP画像ここまで -->


 
    <!-- ページ全体を囲むラッパー -->
    <div class="wrapper">
        <!-- プロジェクト詳細ここから -->
        <div class="contents-wrapper">

            <div class="title-wrapper">
                <div class="title-left">
                   
                    <p> {{$show->subtitle}}</p>
                </div>
                

                <div class="title-right">
                  
                    <a href="{{ route('donation',$show->id)}}" class="shiny-btn2">寄付する</a>
                   <section>
                  <img class="character2" src="{{ secure_asset('/images/watering-plants.png') }}" alt="">
                   </section>
                   
                </div>
                
                  <h1>{{$show->title}} </h1>
                 
            </div>




            <div class="project">
            
                    <div class="right">

                       <img class="character2" src="{{ Storage::url($show->file_path_one)}}"/>
                            <!--<img src="img/1.jpg" alt="">-->
                        </div>
                    
             

                    <div class="left">

                        <div class="doante_point">
                                <img src="" alt="">
                                <p>
                                    <span>🌱</span>
                                    <!-- ここにポイント -->
                                    　現在：    @if($show->points == '')
                                                    0 point
                                                @elseif($show->points > '1')
                                                {{$show->points}} point
                                                @endif
                                </p>
                            </div>

                            <div class="donate_text_one">
                               <p>　{{$show->text_one}}
                               </p>

                            </div>

                    </div>
            </div>
            
            <div class="graf_box">
                <div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
                
            </div>


            <!-- テーブルプロジェクト記事ここまで -->
       
    
            <!-- ミニコンテンツの２つ ここから-->
            <div class="mini-contents-wrapper">
                <div class="mini-box-right">

                    <div class="donate_image_sub">
                       <img src="{{ Storage::url($show->file_path_twe)}}"/>
                    </div>

                    <div class="donate_text_sub">
                        <p>{{$show->text_twe}}
                        </p>
                    </div>
                </div>


                <div class="mini-box-left">

                    <div class="donate_image_sub">
                        <img src="{{ Storage::url($show->file_path_three)}}"/>
                    </div>
                    <div class="donate_text_sub">
                        <p>　{{$show->text_three}}
                        </p>
                    </div>
                </div>

            </div>
            
            
            <p>projectのpointによって木が成長するよ
          
　          <a class="twitter-share-button" href="http://twitter.com/intent/tweet?text=sukusukuで応援しよう🌳 {{$show->title}}　　　&amp;url=https://25e8b5ded9214cbea125193cf6263ad3.vfs.cloud9.us-east-1.amazonaws.com/blog/{{$show->id}}&hashtags=sukusuku" data-size="large">
            Tweet
                </a>
             </p>

           
            <div class="tree_box">
                
                @if($show->points >= '100')
                 <img src="{{ secure_asset('/images/ki-6.png') }}" alt="">
                 
                @elseif($show->points >= '80' && $show->points < '100')
                 <img src="{{ secure_asset('/images/ki.JPG') }}" alt="">
                 
                @elseif($show->points >= '50' && $show->points < '80')
                 <img src="{{ secure_asset('/images/ki-4.png') }}" alt="">
                 
                 @elseif($show->points >= '30' && $show->points < '50')
                 <img src="{{ secure_asset('/images/ki-3.png') }}" alt="">
                 
                 @elseif($show->points >= '20' && $show->points < '30')
                 <img src="{{ secure_asset('/images/ki-2.png') }}" alt="">
                 
                  @elseif($show->points >= '0' && $show->points < '20')
                 <img src="{{ secure_asset('/images/ki--3.png') }}" alt="">
                 
                @elseif($show->points < '0')
                <img src="{{ secure_asset('/images/ki-1.png') }}" alt="">
                @endif
            </div>
            
            
          
           
        
            
            <!-- ミニコンテンツの２つ ここまで-->

            <div class="btn">
                <a href="{{ route('donation',$show->id)}}" class="shiny-btn2">
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
    
    <script>
    
    // グラフ
        {{$show->points}}
  
        var data = [
    {
        domain: { x: [0, 1], y: [0, 1] },
        value: {{$show->points}},
        title: { text: "Donate Point" },
        type: "indicator",
        mode: "gauge+number",
        delta: { reference: 100 },
        gauge: { axis: { range: [null, 100] } }
    }
    ];

    var layout = { width: 700, height: 350 };
    Plotly.newPlot('myDiv', data, layout);





    </script>
    
    
    <!-- フラッシュアニメ用jsリンク -->
    <script src="js/_flash.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    
</body>

</html>