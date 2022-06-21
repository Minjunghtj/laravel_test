<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Shop;
use App\Models\Models\Area;

class ShopController extends Controller
{
    //
    public function index(){
        //主 → 従
       $area_tokyo = Area::find(1)->shops;//Models/Areaのshopsメソッド持ってくる
      

       // 主 <- 従
       $shop = Shop::find(3)->area->name;
       dd($area_tokyo, $shop);

    }
}
