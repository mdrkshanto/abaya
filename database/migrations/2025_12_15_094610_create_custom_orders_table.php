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
        Schema::create('custom_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->string('address')->nullable();
            $table->string('unit')->default('cm');
            $table->string('sleeves_from_shoulder');
            $table->string('sleeves_from_neck');
            $table->string('sleeves_width');
            $table->string('arms');
            $table->string('bust');
            $table->string('waist');
            $table->string('hip');
            $table->string('item_length');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_orders');
    }
};
