<!-- layoutを継承 -->
@extends('layouts.layout');
<!-- タイトルを追加 -->
@section('title','アクティビティ画面')

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
  
  .map{
    margin-top:20px;
    max-width:1500px;
  }


</style>

<!-- 画像配置右左フラグ -->
<?php $test = true; ?>

@section('content')

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  
  
  <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->



<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- 地図 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDorbt3hfftFdXczBTHco6aB4sI8Q4LIu4&callback=initMap" async defer></script>


<script>

// top画像クラスを取得
const img = ["{{asset('storage/img/logo.jpg')}}","{{asset('storage/img/loca1.jpg')}}","{{asset('storage/img/loca2.jpg')}}"];
let count = 0

function imgChange(){
  if(count == img.length){
    count = 0;
  }
  document.getElementById("main-img").src = img[count];
  setTimeout("imgChange()", 3300);

  count++;

}
// imgChange();

// function initMap() {
//     // マップを表示する位置の緯度経度
//     var myLatLng = { lat: 26.2124, lng: 127.6809 }; // 例: 那覇市

//     // マップを表示する div 要素を取得
//     var mapDiv = document.getElementById('map');

//     // マップを作成
//     var map = new google.maps.Map(mapDiv, {
//         center: myLatLng,
//         zoom: 13 // ズームレベル
//     });

//     // マーカーを追加（オプション）
//     var marker = new google.maps.Marker({
//         position: myLatLng,
//         map: map,
//         title: 'マーカータイトル'
//     });
// }




</script>
@endsection