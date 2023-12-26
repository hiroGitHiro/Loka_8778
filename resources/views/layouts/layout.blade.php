<!doctype html>

<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
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
        font-size: 100px;        
        max-width:800px;
        max-height:600px;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        display: block;
        margin: auto;
            
      }
      @media (max-width: 768px) {
        .bd-placeholder-img {
          font-size: 3.5rem;
          max-width:800px;
          max-height:350px;
          margin-left:0%;
          margin-right:0%;          
        }
      }
      /* 画面背景 */
      body{        
        /* background-image: url('{{asset('storage/img/loca_back_2.jpg')}}'); */
        background-image: url('{{asset('storage/img/loca_back_1.jpg')}}');
        background-size: cover;               /* 全画面 */
        background-attachment: fixed;         /* 固定 */
        background-position: center center;   /* 縦横中央 */
        /* margin:0;  */
        width:100%;
        height:100%;
                   
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



      p {
        font-size:40px;
      }

      @media (max-width: 768px) {
        p {
          font-size: 20px;         
        }
      }



      /* pタグのデザイン */
      p .lead{
        font-size:60px;
        font-family: 'Sacramento', cursive;
        
        
      }

      @media (max-width: 768px) {
        p .lead {
          font-size: 30px;        
        }
      }




      /* 見出しh2 */
      .featurette-heading{
            
        margin-top:3%;
        margin-bottom:5%;
        /* font-family:"Arial","メイリオ" */
        font-family:"Impact";
        /* font-family: "Oswald", sans-serif; */
        letter-spacing: .1em;
        font-size:80px;
        color:black;

       
      }

      @media (max-width: 768px) {
        .featurette-heading {
          /* text-align:center; */
          font-size:40px;
        }
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
          padding: 45px;
          margin: 0px;
          display: flex;
          justify-content: center;
          margin-top:10px;
          margin-bottom:10px;
          background-color:white;
         
      }

      .horizontal-list li {
          margin-right: 20px; /* アイテム間の余白 */         
      }

      .horizontal-list li:last-child {
          margin-right: 0; /* 最後のアイテムに余白を適用しない */
      }

      /* 通常のスタイル（PC用） */
      .pc_nav {
        display: block; /* 通常は表示する */
      }

      /* スマートフォン用のスタイル */
      @media only screen and (max-width: 1200px) {
        .pc_nav {
          display: none; /* スマートフォンの場合は非表示にする */
        }
      }


    </style>

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header> 
  <div class="menu-toggle">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="logo" src="{{asset('storage/img/logo.jpg')}}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">      
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>          
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/exterior">外観</a>
          </li>          -->
          <li class="nav-item">           
            <a class="nav-link active" aria-current="page" href="/menu">Menu List</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/activity">遊び</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">店舗情報</a>
          </li> -->
        </ul>       
      </div>
    </div>
  </nav>
</header>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <nav class="pc_nav">
    <ul class="horizontal-list">
      <li>
        <a class="link-nav" href="">Home</a>
      </li>
      <li>
        <a href="#exterior">Exterior</a>
      </li>
      <li>
        <a href="#menu">Menu</a>
      </li>
      <li>
        <a href="#activity">Activity</a>
      </li>
      <li>
        <a href="#shop_guide">Shop Guide</a>
      </li>
    </ul>
  </nav>
</div> 

<main>
  
    @yield('content')
  <!-- </div>  -->
  <!-- FOOTER -->
  
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDorbt3hfftFdXczBTHco6aB4sI8Q4LIu4&callback=initMap" async defer></script>
<script>
function initMap() {
    // マップを表示する位置の緯度経度
    var myLatLng = { lat: 26.2124, lng: 127.6809 }; // 例: 那覇市

    // マップを表示する div 要素を取得
    var mapDiv = document.getElementById('map');

    // マップを作成
    var map = new google.maps.Map(mapDiv, {
        center: myLatLng,
        zoom: 13 // ズームレベル
    });

    // マーカーを追加（オプション）
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'マーカータイトル'
    });
}
$(document).ready(function () {
    $('.menu-toggle').click(function () {
        $('.class').slideToggle();
    });
});
</script>