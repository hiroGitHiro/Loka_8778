<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MTenpo_gazo extends Model
{
     // 論理削除
     use SoftDeletes;

     protected $table = 'tenpo_gazo'; // テーブル名の指定
     protected $fillable = [
         // モデルの代入可能な属性を指定
         'shop_id',
         'gazo_id',
         'tenpo_name',
         'tenpo_introduction',
         'gazo',
         
     ];
}
