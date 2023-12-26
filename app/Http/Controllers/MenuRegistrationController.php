<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MShopMenu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuRegistrationController extends Controller
{
    public function index(Request $request){
        
       
        $M_shop = 1;

       
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
       

        return view('menuSelect.index',compact('M_foodmenu','M_drinkmenu'));


    }
    public function save(Request $request){

        // リクエストを取得
        $menu_id = $request->menu_id;
        $menu_name = $request->menu_name;
        $menu_introduction = $request->menu_introduction;
        $price = $request->price;

        $setfile = $request->file('image')->getClientOriginalName();       
        $setextension = mb_substr($setfile, mb_strrpos($setfile, '.') + 1, mb_strlen($setfile));
        

        // 保存先ディレクトリを指定
        $image = $request->image;

        // 画像が選択されていたら画像を登録する
        if($image !== ""){
            $imageName = time().'.'.$image->extension();
            $imageData = "storage/img/".$imageName;
        }
        

        //トランザクション処理開始
        DB::beginTransaction();
        try {

           
            if($menu_id === "new"){
                
                // 登録処理
                $id = MShopMenu::where('shop_id',1)->max('menu_id');
                $id = $id + 1;
                MShopMenu::create([
                    'shop_id' => 1,                   
                    'menu_id' => $id ,
                    'menu_name' => $menu_name,
                    'Menu_introduction' => $menu_introduction,
                    'gazo' => $imageData,
                    'price' => $price,
                    
                ]);

            }else{
                
                // 更新処理
                $shop_menu = [
                    'menu_name' => $menu_name,
                    'Menu_introduction' => $menu_introduction,
                    'price' => $price,
                    
                ];

                if ($image !== "") {
                    // If an image is provided, add it to the array
                    $shop_menu['gazo'] = $imageData;
                }
                
                
                MShopMenu::where('shop_id',1)->where('menu_id',$menu_id)->update($shop_menu);
                    
            }

            // 画像が選択されていたら画像を登録する
            if($image !== ""){         
                // 画像をstorageに保存
                Storage::put('public/img/' . $imageName, file_get_contents($image));           
            }
            
        } catch (\Exception $e) {
            DB::rollback(); // 問題があったらロールバック
            info($e->getMessage()); // どんなエラーが走ったかログに

           

            $status = "danger";
            return response()->json(['status' => $status,'test'=>$e]);
        }
          
        
        DB::commit(); // 問題なかったらコミット
        $status = "success";
        return response()->json(['status' => $status]);


            
    }
}
