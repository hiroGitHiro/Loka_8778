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
        Schema::table('shop_menu', function (Blueprint $table) {
            
            $table
            ->integer('price')
            ->comment('金額')
            ->nullable()
            ->after('gazo');

            $table
            ->char('menu_flg',1)
            ->comment('メニュー種類')
            ->nullable()
            ->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shop_menu', function (Blueprint $table) {
            //
        });
    }
};
