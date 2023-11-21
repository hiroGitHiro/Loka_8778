<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MShop;
use App\Models\MShopMenu;
use App\Models\MTenpo_gazo;

class ShopInformationController extends Controller
{
    public function index(Request $request){
        
        $M_shop = MShop::select(
            'm_shop.shop_id',
            'm_shop.shop_name',
            'm_shop.shop_introduction',
            'm_shop.tel',
            'm_shop.mail',
            'm_shop.address',            

        )
        
        ->where('m_shop.shop_id',1)
        ->get();



        $M_foodmenu = MShopMenu::select(

            'shop_menu.menu_id',         
            'shop_menu.menu_name',
            'shop_menu.Menu_introduction',
            'shop_menu.gazo',
            'shop_menu.price',
            'shop_menu.Menu_introduction',
                

        )
        ->where('shop_menu.shop_id',1)
        ->where('shop_menu.menu_flg',1)
        ->get();

        $M_drinkmenu = MShopMenu::select(

            'shop_menu.menu_id',         
            'shop_menu.menu_name',
            'shop_menu.Menu_introduction',
            'shop_menu.gazo',
            'shop_menu.price',
            'shop_menu.Menu_introduction',
                

        )

        
        ->where('shop_menu.shop_id',1)
        ->where('shop_menu.menu_flg',2)
        ->get();

        $MTenpo_gazo = MTenpo_gazo::select(

            'tenpo_gazo.gazo_id',         
            'tenpo_gazo.tenpo_name',
            'tenpo_gazo.tenpo_introduction',
            'tenpo_gazo.gazo',
            
        )

        ->where('tenpo_gazo.shop_id',1)      
        ->get();


        return view('homepage.index',compact('M_shop','M_foodmenu','M_drinkmenu','MTenpo_gazo'));


    }
   
    public function save(Request $request){

    //    // リクエストを取得
    //    $table_no = $request->table_no;
    //    // テーブルIDを取得
    //    $table_id = MTable::where('table_no',$table_no)->first()->table_no;
    //    $idlist = $request->idlist;
    //    $quantitylist = $request->quantitylist;


    //     // トランザクション処理開始
    //     DB::beginTransaction();
    //     try {
    //         // 合計金額を取得
    //         $total_price = 0;
    //         // 一度でも登録されているかチェック
    //         $insert_check = false;
    //         // メニューIDの分だけ更新する
    //         for($i = 0;$i < count($idlist); $i++){
    //             // メニューID
    //             $menu_id = $idlist[$i];
    //             // 注文個数
    //             $quantity = $quantitylist[$i];
    //             // 商品の個数が0の場合物理削除する
    //             if($quantity === "0" || $quantity === null){
    //                 // 個数が0のものを物理削除
    //                 MOrder::where('table_id',$table_id)->where('menu_id',$menu_id)->where('accounting_flg',0)->delete();

    //             //0でなければ更新処理を行う
    //             }else{
    //                 // 更新処理
    //                 $M_order = [
    //                     'quantity' => $quantity,
    //                 ];
    //                 MOrder::where('table_id',$table_id)->where('menu_id',$menu_id)->where('accounting_flg',0)->update($M_order);
    //                 $price = MMenu::where('menu_id',$menu_id)->first()->price;
    //                 $total_price = $total_price + ($price * $quantity);
    //                 if($insert_check === false){
    //                     $insert_check = true;
    //                 }
                    
    //             }
                
    //         }
    //         // 一度も処理されてない場合テーブル情報を削除
    //         if($insert_check){
    //             $M_P_order = [
    //                 'total_price' => $total_price
    //             ];
    //             MPorder::where('table_id',$table_id)->where('accounting_flg',0)->update($M_P_order);
    //         }else{
                
    //             MPorder::where('table_id',$table_id)->where('accounting_flg',0)->delete();
    //         }
            
            
           
            
    //     } catch (\Exception $e) {
    //         DB::rollback(); // 問題があったらロールバック
    //         info($e->getMessage()); // どんなエラーが走ったかログに

    //         $status = "danger";
    //         return response()->json(['status' => $status]);
    //     }

        
    //     DB::commit(); // 問題なかったらコミット
    //     $status = "success";
    //     return response()->json(['status' => $status]);


        
    }
}
