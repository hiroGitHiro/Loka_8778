<!-- layoutを継承 -->
@extends('layouts.layout');
<!-- タイトルを追加 -->
@section('title','メニュー画面')

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<style>


  /* 店内紹介の３画像 */
  .shop-img{
    max-width: 500px;
    max-height: 500px;
  }
  @media (max-width: 768px) {
    .shop-img{
      max-width: 100%;
      max-height: auto;
    }
  }

  /* 店舗紹介の文字 */
  .tenpo-information{
    font-size:10px;
  }
  
  

  /* 表示画像 */
  .swiper-container.menu_list {
    padding: 0 20px;
  }


  .swiper-container {
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0;
    z-index: 1;
  }

  .swiper-horizontal {
    touch-action: pan-y;
  }


  /* 画像のスワイプボタン */
  .swiper-pagination.menu_list {
    margin: 15px 0 0;
    text-align: center;
    width: 100%;
    z-index: 4;
  }

  .swiper-pagination {
    position: absolute;
    text-align: center;
    -webkit-transition: 300ms opacity;
    -o-transition: 300ms opacity;
    transition: 300ms opacity;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    z-index: 10;
    
  }

  /* スライド画像 */
  .scroll-a{
    width: 330px;
    height: 200px;
    display: block;
    text-align:center;
    
  }
  
  .container{
    /* display: flex; */
    width:100%;
    justify-content: center;
    align-items: center;
    height: 100vh; /* コンテナの高さを画面の100%に設定 */
  }

  .container img { 
    width:800px;
    height:500px;
    object-fit: cover; /* アスペクト比を維持しつつ、要素に画像をフィットさせます。 */     
  }



  @media (max-width: 768px) { 
    .container img {          
      width:400px;
      height:320px;
      object-fit: cover; /* アスペクト比を維持しつつ、要素に画像をフィットさせます。 */
    }
  }

  /* .container .logo_gazo{
    width:1000px;
    height:700px;
    display: block;
    margin: auto;
    opacity: 0.3;
  } */

  .overlay-logo {
    position: absolute;
    top: 50%; /* 画像を垂直方向の中央に配置 */
    left: 50%; /* 画像を水平方向の中央に配置 */
    transform: translate(-50%, -50%); /* 中央揃え */
    width: 50px; /* 適切なサイズに変更 */
    height: 50px; /* 適切なサイズに変更 */
    opacity: 0.3;
  }

  @media (min-width: 768px) { 
    .overlay-logo {          
      position: 0px;
      top: 50%; /* 画像を垂直方向の中央に配置 */
      right: 70%; /* 画像を水平方向の中央に配置 */
      /* transform: translate(-50%, -50%);  */
      width: 50px; /* 適切なサイズに変更 */
      height: 50px; /* 適切なサイズに変更 */
      opacity: 0.3;
    }
  }
</style>

<!-- 画像配置右左フラグ -->
<?php $test = true; ?>

@section('content')

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <div style="margin-top:80px;"><h2 class="featurette-heading" id="exterior">MENU</h2></div>
    <div class="swiper-container menu_list swiper-container-horizontal swiper-container-ios">    
      <div class="swiper-wrapper" style="transform: translate3d(-1380px, 0px, 0px); transition-duration: 0ms;">     
        @foreach($M_foodmenu as $item)
        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="" style="width: 335px; margin-right: 10px;text-align:center;">
          <div style="position: relative; width: 330px; height: 310px;">
            <a class="scroll-a"href="{{asset($item -> gazo)}}">
              <img class="scroll-image" src="{{asset($item -> gazo)}}" alt="メニューリスト08">             
            </a>
            <img class="overlay-logo" src="{{asset('storage/img/loca_back_3.png')}}">
          </div>         
				</div>
        @endforeach
      </div>       
		  <!-- <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> -->
    </div>    
  </div>

  <div class="swiper-pagination menu_list swiper-pagination-clickable swiper-pagination-bullets">
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span>
    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 8"></span>
  </div>

    
    <!-- START THE FEATURETTES -->
    

   
    <!-- <div class="row featurette">
      <h2 class="featurette-heading">MENU</h2>
      @foreach($M_foodmenu as $item)
      <div class="explanation col-md-6">
        <h3 class="lead">{{$item -> menu_name}}</h3>
        <p>{{$item -> Menu_introduction}}</p>
      </div>            
      <div class="col-md-6">
        <img class="shop-img" src="{{asset($item -> gazo)}}">
      </div>
      @endforeach
      @foreach($M_drinkmenu as $item)
      <div class="explanation col-md-6">
        <h3 class="lead">{{$item -> menu_name}}</h3>
        <p>{{$item -> Menu_introduction}}</p>
      </div>            
      <div class="col-md-6">
        <img class="shop-img" src="{{asset($item -> gazo)}}">
      </div>
      @endforeach
    </div> -->

    <!-- <h2 class="featurette-heading">Inquiry</h2> -->
    
    <!-- /END THE FEATURETTES -->
  <!-- </div>/.container -->

  
    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->



<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween:20,
    loop: true,
    // loopFillGroupWithBlank: false, // 追加することで余白ができないようにする
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true, // ページネーションをクリック可能にする
    },
    // 自動再生
    autoplay: {
      delay: 2500, // ミリ秒単位での自動再生間隔
      disableOnInteraction: false, // ユーザーがスライダーとインタラクションした後も自動再生を続行する
    },
    // スライダーの速さ
    speed: 800, // ミリ秒単位のスライダーの速度
});
</script>
@endsection