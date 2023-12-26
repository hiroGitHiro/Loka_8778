<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MShop;
use App\Models\MShopMenu;
use App\Models\MTenpo_gazo;

class MenuController extends Controller
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


        
        return view('menu.index',compact('M_shop','M_foodmenu','M_drinkmenu','MTenpo_gazo'));


    }
   
   
}
