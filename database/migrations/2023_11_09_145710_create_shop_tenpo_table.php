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
        Schema::create('tenpo_gazo', function (Blueprint $table) {
            $table
            ->integer('shop_id')
            ->comment('shop_id');

            $table
            ->integer('gazo_id')
            ->comment('gazo_id');

            $table
            ->string('tenpo_name')
            ->comment('店舗画像名')
            ->nullable();

            
            $table
            ->string('tenpo_introduction',300)
            ->comment('店舗紹介')
            ->nullable();

            
            $table
            ->string('gazo')
            ->comment('店舗画像')
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
        Schema::dropIfExists('tenpo_gazo');
    }
};
