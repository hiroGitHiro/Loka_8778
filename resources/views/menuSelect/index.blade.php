@extends('layouts.maintenance')
@section('content')
@section('title','メニュー登録画面')
<style>

/* テーブルの画像 */
.table-img{
    width:100px;
    height:100px;

}

/* テーブルのボタンサイズ */
.table-btn{
   
}
@media (max-width: 768px) {
    .table-btn {
       margin:10%;
        
    }
}

/* テーブルheader */
.head-text{
    font-size:10px;
    text-align:center;
}
@media (max-width: 768px) {
    .head-text{
        font-size:10px;
    }
}

/* テーブルボディ */
.tbody{
    font-size:10px;
    text-align:center;
}


 /* モーダルのスタイル */
 .modal {
    display: none; /* 最初は非表示 */
    position: fixed;
    top: 1;
    left: 5;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* 半透明の背景色 */
}

 /* モーダルのスタイル */
 .modal1 {
    display: none; /* 最初は非表示 */
    position: fixed;
    top: 1;
    left: 5;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* 半透明の背景色 */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    }

.image-small{  
    width:72px;
    height:57px;
    margin: 20px;
    margin-right: 100%;
    }

@media(max-width:767px){
  .modal {
    display: none; /* 最初は非表示 */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* 半透明の背景色 */
  }

  .modal-content {
    background-color: #fefefe;
    /* margin: 40% auto; */
    padding: 20px;
    border: 1px solid #888;
    width: 100%;
  }
  .image-small{  
    width:40px;
    height:28px;
    margin: 5px;
    margin-right: 80%;
  }
}



.label-small {
    font-size: 0.8em;
}
.input-small {
    font-size: 0.8em; /* 例: フォントサイズを小さくする */
}

</style>
<div class="container">
    <section class="l-section l-menu">
        <div class="l-wrap" style="margin-top:100px;">        
            <h2 class="featurette-heading">メニュー登録</h2> 
                       
            <section class="l-section l-menu" id="menu">
                <form class="form-horizontal">
                    <div class="box">                     
                        <div class="form-group" style="margin-bottom: 5%; text-align: center;">
                            <div class="form-row align-items-center">
                                <label class="col-2 label-small text-center">メニュー名</label>
                                <div class="col-12">
                                    <div co></div>
                                    <input type="text" class="form-control" id="kensaku">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            
        </div>
    </section>
    <div class="container d-flex justify-content-end"style="margin-bottom:10px;">
        <button type="button" class="btn btn-primary modal-primary" data-id="new">登録</button>
    </div>
   
    <section class="l-section l-menu">
        <div class="l-wrap">       
            <section id="menu">
                <div class="boardWrapper table-primary">
                    <div class="box">
                        <table class="table table-striped"style="border:1px">
                            <thead>
                                <tr class="table table-success">                                  
                                    <td class="head-text" style="width:25%">ﾒﾆｭｰ</td>
                                    <td class="head-text" style="width:40%">ﾒﾆｭｰ紹介</td>
                                    <td class="head-text" style="width:15%">画像</td>
                                    <td class="head-text" style="width:20%"></td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($M_foodmenu as $item)                                            
                                    <tr>
                                        <td class ="tbody"  style="width:20%">{{$item->menu_name}}</td>
                                        <td class ="tbody"  style="width:40%">{{$item->Menu_introduction}}</td>
                                        <td class ="tbody"  style="width:20%"><img class="table-img" src="{{asset($item->gazo)}}"></img> </td>                                    
                                        <td class ="tbody"  style="width:20%">
                                            <button type="button" class="btn btn-primary modal-trigger table-btn modal-primary" id="modal_primary"
                                                data-id ="{{$item->menu_id}}"
                                                data-menu_name="{{$item->menu_name}}"
                                                data-menu_introduction="{{$item->Menu_introduction}}"
                                                data-menu_gazo="{{$item->gazo}}"
                                                data-price="{{$item->price}}"                                            
                                            >変更<button>
                                      
                                        </td>
                                    </tr>                                                        
                                @endforeach 
                                @foreach($M_drinkmenu as $item)                                            
                                    <tr>
                                        <td class ="tbody"  style="width:20%">{{$item->menu_name}}</td>
                                        <td class ="tbody"  style="width:40%">{{$item->Menu_introduction}}</td>
                                        <td class ="tbody"  style="width:20%"><img class="table-img" src="{{asset($item->gazo)}}"></img> </td>                                    
                                        <td class ="tbody"  style="width:20%">
                                            <button type="button" class="btn btn-primary modal-trigger table-btn modal-primary"
                                                data-id ="{{$item->menu_id}}"
                                                data-menu_name="{{$item->menu_name}}"
                                                data-menu_introduction="{{$item->Menu_introduction}}"
                                                data-menu_gazo="{{$item->gazo}}"
                                                data-price="{{$item->price}}"                                             
                                            >変更<button>
                                                
                                            <!-- <input type="button" class="btn btn-danger modal-trigger table-btn modal-danger" id="modal_danger" name="{{$item->table_no}}" value="削除">                                                                                                                     -->
                                        </td>
                                    </tr>                                                        
                                @endforeach                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>

<!-- テーブルモーダル本体 -->
<div id="modal" class="modal">
    <div class="modal-dialog">  
        <div class="modal-content">   
            <div class="modal-header">        
                <h5 class="modal-title" id="label1"style="text-align:center">メニュー登録</h5>        
            </div>
            <form class="main-from" method="POST" enctype="multipart/form-data" id="uploadForm">
            @csrf
                <input type="hidden" id="modal_id" name="modal_id" value="">
                <div class="form-group table-no-input">
                    <lavel class="col-2"style="text-align:right;">ﾒﾆｭｰ名:</lavel> 
                    <div class="row col-12"style="margin:10px;">                        
                        <input type="text"class="form-control col-4"id="modal_menu_name" name="modal_menu_name">
                    </div>
                    <lavel class="col-2"style="text-align:right;">ﾒﾆｭｰ紹介:</lavel>
                    <div class="row col-12"style="margin:10px;">                      
                        <textarea class="form-control col-4"style="height:100px;" id="modal_menu_introducion" name="modal_menu_introducion"></textarea>
                    </div>
                    <lavel class="col-2"style="text-align:right;">画像:</lavel>
                    <div class="row col-12"style="margin:10px;">                       
                        <img class="col-12"src=""id="modal_img" name="modal_img">
                        <input type="file" id="fileInput"name="fileInput" style="display: none;" accept="image/*">
                        <!-- <input type ="hidden" id="filepass"name="filepass"val=""> -->
                        <input type="buttom"class="btn btn-primary col-4" id="change_gazo_btn" name="change_gazo_btn"value="画像選択">
                    </div>
                    <lavel class="col-2"style="text-align:right;">金額:</lavel>
                    <div class="row col-12"style="margin:10px;">                        
                        <div class="col-4"><input type="text"class="form-control" style="text-align:right;"id="modal_price"name="modal_price"><p>円</p></div>
                        <!-- <lavel class="col-1"style="text-align:left;">円</lavel> -->
                    </div>
                </div>
                <div class="container d-flex justify-content-end"style="margin-bottom:10px;">
                    <input type="button"class="modal-btn btn-lg btn-primary col-3" id="registration"value="登録">
                    <input type="button"class="modal-btn btn-lg btn-dark col-3 close"id="close"name="close"value="戻る">                
                </div>                
            </from>              
        </div>
    </div>  
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- jQueryを読み込む -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
     // 画像選択ボタンが押されたとき
     $("#change_gazo_btn").click(function() {
        // ファイル選択ボタンをクリックする
        $("#fileInput").click();
    });

    // ファイルが選択されたときの処理
    $("#fileInput").change(function() {
        // 画像のフルパスを取得 ※fakepassになってる？      
        // var filePath = $("#fileInput").val();
        // 選択されたファイルを取得
        var file = this.files[0];

        // FileReaderオブジェクトを使用して画像を読み込む
        var reader = new FileReader();
        reader.onload = function(e) {
            // 読み込んだ画像を表示          
            $('#modal_img').attr('src', e.target.result);
            // $('#modal_img').val(filePath);
        };
        // 画像を読み込む
        reader.readAsDataURL(file);
        var fileName = file.name;
        $('#modal_img').val(fileName);
    });
});

    // 新規登録もしくは変更ボタンが押されたとき
    $('.modal-primary').click(function(){

        // idを代入
        var id = $(this).data('id');
        $('#modal_id').val(id);
        if(id == "new"){
            // モーダルを開く
            $('#modal').css("display","block"); 
            return 0;
        }
       
        var menu_name = $(this).data('menu_name');
         
        var menu_introduction = $(this).data('menu_introduction');

        var menu_gazo = $(this).data('menu_gazo');
        // 画像リンク
        var menuGazoUrl = "{{asset('')}}"+menu_gazo;

        var price = $(this).data('price');

        $('#modal_menu_name').val(menu_name);
        $('#modal_menu_introducion').val(menu_introduction);
        $('#modal_img').attr('src',menuGazoUrl);
        $('#modal_price').val(price);


         // モーダルを開く
        $('#modal').css("display","block"); 
    });


    // モーダルを閉じる
    $('.close').click(function(){

        // 値を初期化してモーダルを閉じる
        $('#modal_id').val("");
        $('#modal_menu_name').val("");
        $('#modal_menu_introducion').val("");
        $('#modal_img').attr('src',"");
        $('#modal_price').val("");
        $('#modal_change').html(""); 
        $('#modal').css("display","none"); 
        
    });

    // モーダル登録処理
    $('#registration').click(function(){


        // FormData
        var formData = new FormData();
        var menu_id = $('#modal_id').val();         
        var menu_name = $('#modal_menu_name').val();
        var menu_introduction = $('#modal_menu_introducion').val();
        // 画像リンク
        // var menuGazoUrl = "{{asset('')}}"+menu_gazo;
        var price = $('#modal_price').val();
        var fileInput = document.getElementById('fileInput');


        formData.append('menu_id', menu_id);
        formData.append('menu_name', menu_name);
        formData.append('menu_introduction', menu_introduction);
        formData.append('price', price);

        if (fileInput.files.length > 0) {
            formData.append('image', fileInput.files[0]);
        }else{
            formData.append('image', "");
        }

       
       
        //　トークンを起動
        $.ajaxSetup({
            headers: {     
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
        
            url: "{{route('menuSelect.save')}}",    
            type: 'POST', // リクエストのHTTPメソッド
            dataType: 'json',
            processData: false,  //jQueryがデータを処理しないようにする
            contentType: false,  // jQueryがcontentTypeを設定しないようにする
            data: formData,           
                     
        })
        // 接続成功
        .done((res)=>{
            // 値を初期化してモーダルを閉じる 
            location.reload();          
            alert('ﾒﾆｭｰを登録しました');
        })
        // 接続失敗
        .fail((res,status,error)=>{
            // 値を初期化してモーダルを閉じる
            location.reload();
            
            alert('ﾒﾆｭｰ登録に失敗しました');
        });

    });


    

    

        

</script>


@endsection