<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MExterior extends Model
{
    // 論理削除
    use SoftDeletes;

    protected $table = 'shop_exterior'; // テーブル名の指定
    protected $fillable = [
        // モデルの代入可能な属性を指定
        'shop_id',
        'exterior_id',
        'exterior_name',
        'exterior_introduction',
        'gazo',
        
        
    ];
}
