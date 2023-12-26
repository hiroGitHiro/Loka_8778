<!doctype html>

<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.3/examples/carousel/">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Bootstrap core CSS -->

    
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>

      /* フッター */
      footer{
        background-color: black;
        color:#FFFFFF;
        margin-top:10px;
        height:40px;
      }


       /* 画面上の画像 */
       .bd-placeholder-img {
        font-size: 1.125rem;
        /* max-height:auto; */
        max-height:800px;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
       
      }

      @media (max-width: 768px) {
        .bd-placeholder-img {
          font-size: 3.5rem;
          max-height:400px;
          
        }
      }


      /* 画面背景 */
      body{        
        background-image: url('{{asset('storage/img/loca_back_2.jpg')}}');
        margin:0;             
      }




      /* headerロゴ */
      .logo{
        max-width:50px;
        max-height:50px;
        border-radius: 50%; /* 丸くするための設定 */
        overflow: hidden; /* 丸くクリップするために必要 */
      }


      /* header */
      header{
        width:auto;
      }





        /* pタグのデザイン */
        p .lead{
          font-size:100px;
          
        }




      /* 見出しh2 */
      .featurette-heading{
        text-align:center;
        margin-top:3%;
        margin-bottom:5%;
        /* font-family:"Arial","メイリオ" */
        font-family:"Impact";
        font-size:30px;
        color:black;
        border:5px;

         /* アンダーバーのスタイルと色を指定 */
         /* アンダーバーとテキストの間隔を調整（必要に応じて変更） */
        /* border-bottom: 2px solid #333; */
        /* padding-bottom: 5px; */       
      }








      /* 画像下のnav */
      nav {
          display: flex;
          justify-content: center;
          /* ナビゲーションの背景色を追加（必要に応じて変更） */
          /* background-color: #333;  */
      }

      nav a {
          padding: 10px 20px;
          /* ナビゲーションリンクの文字色を白に設定（必要に応じて変更） */
          color: #333; 
          /* ナビゲーションリンクの下線を削除 */
          text-decoration: none; 
      }

      .explanation{
        text-align: center;
      }

      .horizontal-list {
          list-style: none;
          padding: 0;
          margin: 0;
          display: flex;
          justify-content: center;
          margin-top:10px;
          margin-bottom:10px;
         
      }

      .horizontal-list li {
          margin-right: 10px; /* アイテム間の余白 */         
      }

      .horizontal-list li:last-child {
          margin-right: 0; /* 最後のアイテムに余白を適用しない */
      }

      /* 通常のスタイル（PC用） */
      .pc_nav {
        display: block; /* 通常は表示する */
      }

      /* スマートフォン用のスタイル */
      @media only screen and (max-width: 768px) {
        .pc_nav {
          display: none; /* スマートフォンの場合は非表示にする */
        }
      }

      /* .link-nav:hover {
        text-decoration: underline;
        color: red;
      } */




      /* 店内情報のフォント */
      .lead{
        /* font-family:"Impact"; */
        font-family: 'Sacramento', cursive;
        font-size:25px;
        text-align:center;
        margin-bottom:20px;
      }


    .boardWrapper {
        background-color:white;
        /* background-color: #f3eded; */
        padding: 20px;
        max-width: 1000px;
        width:100%;
        margin: 0 auto;
       
        margin-bottom: 20px;
    }
    

    </style>

    
    
    <!-- Custom styles for this template -->
    <!-- <link href="carousel.css" rel="stylesheet"> -->
  </head>
<body>
    
    <header> 
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="{{asset('storage/img/logo.jpg')}}"></a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">      
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">ホーム</a>
            </li>          
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">外観</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/menu">メニュー</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">遊び</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">店舗情報</a>
            </li>
            </ul>
            
        </div> -->
        </div>
    </nav>
    </header>
<!-- <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form> -->
<main>

  @yield('content')
</main>

<!-- <footer class="container">    
    <p style="text-align:center;">&copy; 2023 Company, Inc</p>
</footer> -->
    <footer style="text-align:center;">
        <small>&copy; 2023 Company, Inc</small>
    </footer>
    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

      
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- 地図 -->


<script>


</script>