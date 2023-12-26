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
        Schema::create('shop_exterior', function (Blueprint $table) {
            $table
            ->integer('shop_id')
            ->comment('shop_id');

            $table
            ->integer('exterior_id')
            ->comment('exterior_id');

            $table
            ->string('exterior_name')
            ->comment('外観名')
            ->nullable();

            
            $table
            ->string('exterior_introduction',300)
            ->comment('外観紹介')
            ->nullable();

            
            $table
            ->string('gazo')
            ->comment('外観画像')
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
            $table->primary(['shop_id','exterior_id']);

            // ユニークキー設定            
            $table->unique(['shop_id','exterior_id']);
        });

        
    
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exterior');
    }
};
