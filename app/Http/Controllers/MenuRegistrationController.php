<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MShopMenu;

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
        ->get();
       

        return view('menuSelect.index',compact('M_foodmenu'));


    }
}
