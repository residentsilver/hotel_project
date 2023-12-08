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
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('guest_id');
            $table->string('name');
            $table->string('address');
            $table->string('tel');
            $table->timestamps();
            $table->softDeletes();//ソフトデリート実装準備
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests',function(Blueprint $table){
            $table->dropSoftDeletes();//ソフトデリート実装準備
        });
    }
};
