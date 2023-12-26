<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MShop;
use App\Models\MShopMenu;
use App\Models\MTenpo_gazo;
use App\Models\MExterior;

class ExteriorController extends Controller
{
    public function index(Request $request){
        
       
        $M_Exterior = MExterior::select(
            'shop_exterior.shop_id',
            'shop_exterior.exterior_id',
            'shop_exterior.exterior_name',
            'shop_exterior.exterior_introduction',
            'shop_exterior.gazo',
        )
        
        ->where('shop_exterior.shop_id',1)
        ->get();
       
        return view('exterior.index',compact('M_Exterior'));

    }
}
