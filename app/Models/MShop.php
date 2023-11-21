<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MShop extends Model
{
    // 論理削除
    use SoftDeletes;
    protected $table = 'm_shop'; // テーブル名の指定
    protected $fillable = [
        // モデルの代入可能な属性を指定
        'shop_name',
        'shop_introduction',
        'gazo',
        'tel',
        'mail',
        'address',
    ];
}
