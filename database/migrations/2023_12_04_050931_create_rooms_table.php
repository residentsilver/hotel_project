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
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->bigInteger('master_id')->unsigned();
            $table->foreign('master_id')
                ->references('master_id')
                ->on('masters')
                ->onDelete('RESTRICT')
                ->onUpdate('RESTRICT');
            $table->string('room_num');
            $table->integer('room_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
