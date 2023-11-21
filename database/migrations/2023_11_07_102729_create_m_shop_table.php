<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_shop', function (Blueprint $table) {
            $table
            ->increments('shop_id')
            ->comment('id');
            

            $table
            ->string('shop_name')
            ->comment('店舗名');
           
            
            $table
            ->string('shop_introduction',300)
            ->comment('店舗紹介')
            ->nullable();

            
            $table
            ->string('gazo')
            ->comment('店舗画像')
            ->nullable();

            $table
            ->string('tel',15)
            ->comment('店舗電話番号')
            ->nullable();

            $table
            ->string('mail')
            ->comment('店舗メールアドレス')
            ->nullable();

            $table
            ->string('address')
            ->comment('店舗住所')
            ->nullable();
            

            $table
            ->timestamp('created_at')
            ->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('作成日');

            $table
            ->timestamp('updated_at')
            ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))
            ->comment('更新日');

            $table
            ->softDeletes()
            ->comment('削除日');


            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_shop');
    }
};
