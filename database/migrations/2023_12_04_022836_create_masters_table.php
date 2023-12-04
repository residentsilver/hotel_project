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
         Schema::create('masters', function (Blueprint $table) {
             $table->bigIncrements('master_id');
             $table->string('room_name');
             $table->integer('imitation');
             $table->string('room_image');
             $table->timestamps();
         });
     }

     


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
