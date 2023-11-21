@extends('layouts.layout')
@section('content')


<section class="l-section l-menu">
    <div class="l-wrap">
        <h2>検索</h2>
        <section  id="menu">
            <div class="box">
                <div class="group js-slider2 col-12" style="margin-bottom:5%">
                    <p class="col-2"class="text-align:center">メニュー名:</p>
                    <input type="text" class="col-8">
                    <input type ="submit" class="btn btn-primary" style="margin-left:5%"value="検索">
                </div>
            </div>
        </section>
    </div>
</section>

<section class="l-section l-menu">
    <div class="l-wrap">       
        <section  id="menu">
            <div class="box">
                <table class="table table-striped">
                    <thead>
                    <tr class="table table-primary">
                        <div>
                            <td style="width:25%">メニュー名</td>
                            <td style="width:20%">コメント</td>
                            <td style="width:35%">画像</td>
                            <td style="width:20%"></td>
                        </div>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($M_foodmenu as $item)        
                            <div class="form-group menu-input">
                                <tr>
                                    <td style="width:30%">{{$item->menu_name}}</td>
                                    <td class ="text-right"  style="width:20%">{{$item->Menu_introduction}}</td>
                                    <td style="width:35%"><img src="{{asset($item->gazo)}}"></img> </td>                                    
                                    <td style="width:15%">
                                    <input type="button" class="btn btn-primary modal-trigger" id="modal-trigger" name="{{$item->table_no}}" value="変更">
                                    <input type="button" class="btn btn-danger modal-trigger" id="modal-trigger" name="{{$item->table_no}}" value="削除">                                    
                                    </td>
                                </tr>
                            </div>                           
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</section>



@endsection