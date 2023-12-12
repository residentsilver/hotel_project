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
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('reservation_id');
            $table->integer('guest_id');
            $table->integer('people');
            $table->date('checkin');
            $table->date('checkout');
            $table->timestamps();
            $table->softDeletes();//ソフトデリート実装準備
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations',function(Blueprint $table){
            $table->dropSoftDeletes();//ソフトデリート実装準備
        });
    }
};
