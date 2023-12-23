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
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('itemName');
            $table->string('description');
            $table->string('image');
            $table->string('location');
            $table->string('shopName');
            $table->integer('price');
            $table->string('engine');
            $table->string('power');
            $table->string('Torsi');
            $table->string('kilometer');
            $table->string('color');
            $table->foreignId('category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
