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
        Schema::create('shop_menu', function (Blueprint $table) {
            $table
            ->integer('shop_id')
            ->comment('shop_id');

            $table
            ->integer('menu_id')
            ->comment('menu_id');

            $table
            ->string('menu_name')
            ->comment('メニュー名')
            ->nullable();

            
            $table
            ->string('Menu_introduction',300)
            ->comment('メニュー紹介')
            ->nullable();

            
            $table
            ->string('gazo')
            ->comment('メニュー画像')
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



            // プライマリーキー設定            
            $table->primary(['shop_id','menu_id']);

            // ユニークキー設定            
            $table->unique(['shop_id','menu_id']);
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_menu');
    }
};
