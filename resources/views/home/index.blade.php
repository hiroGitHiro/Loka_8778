<!-- layoutを継承 -->
@extends('layouts.layout');
<!-- タイトルを追加 -->
@section('title','LokaTest')

<style>
  /* 店内紹介の３画像 */
  .shop-img{
    width: 100%;
    max-height: auto;
  }
  @media (max-width: 768px) {
    .shop-img{
      max-width: 100%;
      max-height: auto;
    }
  }
  /* 店舗紹介の文字 */
  .tenpo-information{
    font-size:20px;
  }

  @media (max-width: 768px) {
    .tenpo-information{
      font-size:15px;
    }
  }
  
  /* グーグルマップ */
  .map {
    margin-top:5%;
    margin-bottom:5%;
    /* margin-top:20px; */
    height:350px;
    
  }

  .map-gazo {
    max-width:100%;
    max-height:100%;
  }

</style>


@section('content')





  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <hr class="featurette-divider">

  <div class="carousel-inner">
    <div class="carousel-item_1">
      <img class="bd-placeholder-img" style="text-align:center;"id="main-img" width="100%" height="100%" src="{{asset('storage/img/logo.jpg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
    </div>     
  </div>

 
  <div class="container marketing">


    <!-- START THE FEATURETTES -->
    <div class="row featurette">
      <h2 class="featurette-heading" id="exterior">ABOUT</h2>
      <p><span class="lead">サクッと</span>1杯だけでもお気軽に♪</p>
      <!-- <div class="explanation col-md-6">       
      </div> -->
      <div class="col-md-12">       
        <img class="shop-img" src="{{asset('storage/img/loca_back_6.png')}}">
      </div>
    </div>
    <div class="row featurette"style="margin-top: 50px;">
   
   
    <p><span class="lead">カラオケ</span>完備。</p>
    <p>友達同士で盛り上がろう♪</p>
      <!-- <div class="explanation col-md-7 order-md-2">
        
      </div> -->
      <div class="col-md-12 order-md-1">  
        <img class="shop-img" src="{{asset('storage/img/karaoke.jpg')}}">
      </div>
    </div>

    <div class="row featurette"style="margin-top: 50px;">
      
      <p><span class="lead">ダーツ</span>完備♪</p>
      <p>負けた人はテキーラ一気♪</p>
      <!-- <div class="explanation col-md-7">
        
      </div> -->
      <div class="col-md-12"sytle="widht: 100%; heigth:auto;">        
        <img class="shop-img" src="{{asset('storage/img/darts.jpg')}}">
      </div>
      <div style="margin-top:100px;" ></div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">    
      <h2 class="featurette-heading" id="menu">Menu</h2>
      <p><span class="lead">飲み放題♪</span>２時間３,０００円！</p>     
      <div class="col-md-12">     
        <img class="shop-img" src="{{asset('storage/img/loca2.jpg')}}">
      </div>
      <div style="margin-top:100px;" ></div>
      <p><span class="lead">唐揚げ</span></p>    
      <div class="col-md-12">      
        <img class="shop-img" src="{{asset('storage/img/loka_Food1.jpg')}}">
      </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
      <h2 class="featurette-heading" id="activity">Activity</h2>
      <p><span class="lead">ダーツ</span></p>
      <!-- <div class="explanation col-md-7">        
      </div> -->
      <div class="col-md-12"sytle="widht: 100%; heigth:auto;">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img class="shop-img" src="{{asset('storage/img/loca3.jpg')}}">
      </div>
      <div style="margin-top:100px;" ></div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
      <h2 class="featurette-heading"id="shop_guide">Shop Guide</h2>     
      <h3 class="lead"style="text-align:left; margin-bottom:5%; font-size: 30px;">店舗情報♪</h3>
      <img class="map-gazo shop-img"style="width: 300px;max-height: 300px;margin-left:20%;margin-right:20%;" src="{{asset('storage/img/loca1.jpg')}}"> 
    <!-- <div style = text-align:center><h3 class="featurette-heading">テストメニュー <span class="text-muted">See for yourself.</span></h3></div> -->
    
    @foreach($M_shop as $item)           
      <div class=row>
        <div class="col-5" style="text-align:right;">
          <p class="tenpo-information">店舗名:</p>
          <p class="tenpo-information">住所:</p>
          <p class="tenpo-information">電話番号:</p>
          <p class="tenpo-information">mail:</p>
        </div>
        <div class="col-7" style="text-align:left;">
          <p class="tenpo-information">{{$item -> shop_name}}</p>
          <p class="tenpo-information">{{$item -> address}}</p>
          <p class="tenpo-information" onclick="callNumber('{{$item->tel}}')" style="cursor: pointer; color: black;">{{$item -> tel}}</p>
          <!-- <p class="tenpo-information" onclick="sendMail('{{$item->mail}}')" style="cursor: pointer; color: blue; text-decoration: underline;">{{$item -> mail}}</p> -->
          <p class="tenpo-information" onclick="sendMail('{{$item->mail}}')" style="cursor: pointer; color: black;">{{$item -> mail}}</p> 
        </div>
        <div style="text-align:center; margin-top:10%;margin-left:10px;">
          <p>詳しくはInstagramをチェック！</p>
          <p>↓↓↓↓↓↓</p>
          <a href="https://instagram.com/bar_loca24?igshid=MWhqemk3cmFzaXptZw%3D%3D&utm_source=qr" target="_blank">
            <!-- <i class="fa-brands fa-instagram" ></i>Instagram -->
            <img style="width:50px; height:50px; margin-bottom:30px;"src="{{asset('storage/img/insta_icon.jpg')}}">
          </a>         
        </div>
      </div>    
      <div class="row map"> 
        <!-- <div class="col-6">
          <img class="map-gazo shop-img"style="width: 300px;max-height: 300px;margin-left:20%;margin-right:20%;" src="{{asset('storage/img/loca1.jpg')}}">
        </div> -->
        <div class="col-12">
          <iframe class="map-gazo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.3215728073337!2d127.67836561121766!3d26.21873888947295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5694df6b8c053%3A0x2f21fd8cd22f0c40!2zU3BvcnRzQmFyIExPQ0Eg44K544Od44O844OE44OQ44O844Ot44Kr!5e0!3m2!1sja!2sjp!4v1700886487998!5m2!1sja!2sjp"
            style="width:100%;height:300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <!-- <h2 class="featurette-heading">Inquiry</h2> -->
    @endforeach 
    <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->
  
      
  
    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->



<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- 地図 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDorbt3hfftFdXczBTHco6aB4sI8Q4LIu4&callback=initMap" async defer></script>


<script>

  // 電話番号をクリックしたときの処理
  function callNumber(phoneNumber) {
      // 電話番号を使って通話を開始する処理をここに追加
      window.location.href = 'tel:' + phoneNumber;
  }

  // メールアドレスをクリックしたときの処理
  function sendMail(emailAddress) {
      // メールアドレスを使ってメールクライアントを開く処理をここに追加
      window.location.href = 'mailto:' + emailAddress;
  }

// top画像クラスを取得
// const img = ["{{asset('storage/img/logo.jpg')}}","{{asset('storage/img/loca1.jpg')}}","{{asset('storage/img/loca2.jpg')}}"];
// let count = 0

// function imgChange(){
//   if(count == img.length){
//     count = 0;
//   }
//   document.getElementById("main-img").src = img[count];
//   setTimeout("imgChange()", 3300);

//   count++;

// }
// imgChange();




</script>
@endsection