<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function shops(){
        return $this->hasmany('App\Models\Models\Shop');
        //子テーブルと繋ぐ
    }
}
