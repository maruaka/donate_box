

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suku-suku</title>
    <link rel="stylesheet" href="{{ secure_asset('css/all.css') }}">
    <link rel="icon" href="img/favicon.ico">
    <!-- キランとひかるボタン用リンク -->
    <link rel="stylesheet" href="css/_kiran-bt.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>
            <a href="index.html"><img class="logo-mini" src="img/logo-mini.png" alt=""></a>
        </h1>
        <nav class="pc-nav">
            <ul>
                <li><a href="">TOP</a></li>
                <li><a href="{{ route('blog.create')}}">掲載希望者さま</a></li>
       
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
                    <td class="td-right"><img class="all-img" src="{{ Storage::url($blog->file_path_three)}}" class="d-block rounded-circle mb-3"/></td>
                    <!--<td class="td-right"><img class="all-img" id="mytree" src="{{ secure_asset('/images/ki.png')}}"/></td>-->
                    
                    <td class="td-left">
                        <div>
                            <div>
                                🌱　<p>現在のpoint：
                                  @if($blog->points == '')
                                     0 point</p>
                                @elseif($blog->points > '0')
                                   {{$blog->points}} point</p>
                                @endif
                            </div>
                            <table>
                                <tr>
                                  
                                    <td class="data">👨管理人：{{$blog->user_name}}</td>
                  
                                </tr>
                            </table>
                            <div>
                                　{{$blog->text_one}}
                                　
                            </div>
                               
                             
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            </a>
            </div>
             @endforeach
            <!-- テーブルプロジェクト記事ここまで -->
           
       
       
        </div>
                   
    <footer class="footer">
        <div class="Copyright">Copyright © 2021, SUKU-SUKU All Right Reserved Anup</div>
    </footer>
    
    
    
    
    <script>
        
        let pic_src = new Array("img/1.jpg","img/2.jpg","img/3.jpg");
        let num = -1;

        
        function slideshow() {
            if(num == 2){
                num = 0;
            } else {
                num ++;
            }
            document.getElementById("mypic").src = pic_src[num];
            setTimeout("slideshow()",3000);
        }
        
         slideshow();
         
         
    </script>
    
    
    
    
</body>

</html>