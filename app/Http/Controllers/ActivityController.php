<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MActivity;

class ActivityController extends Controller
{
    public function index(Request $request){
        
       
        $M_Activity = MActivity::select(
            'shop_activity.shop_id',
            'shop_activity.activity_id',
            'shop_activity.activity_name',
            'shop_activity.activity_introduction',
            'shop_activity.gazo',       
        )
        
        ->where('shop_activity.shop_id',1)
        ->get();

        
        return view('activity.index',compact('M_Activity'));

    }
}
