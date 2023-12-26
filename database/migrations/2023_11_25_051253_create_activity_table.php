<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_activity', function (Blueprint $table) {
            $table
            ->integer('shop_id')
            ->comment('shop_id');

            $table
            ->integer('activity_id')
            ->comment('activity_id');

            $table
            ->string('activity_name')
            ->comment('アクティビティ名')
            ->nullable();

            
            $table
            ->string('activity_introduction',300)
            ->comment('アクティビティ紹介')
            ->nullable();

            
            $table
            ->string('gazo')
            ->comment('アクティビティ画像')
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
            $table->primary(['shop_id','activity_id']);

            // ユニークキー設定            
            $table->unique(['shop_id','activity_id']);
        });

        
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
