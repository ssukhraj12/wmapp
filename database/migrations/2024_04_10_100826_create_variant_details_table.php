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
        Schema::create('variant_details', function (Blueprint $table) {
            $table->increments('variant_detail_id');
            $table->bigInteger('vid');
//            $table->foreignId('variant_id')->constrained('variants');
//            $table->unsignedBigInteger('variant_id');
//            $table->foreign('variant_id')->on('variants')->references('variant_id');
            $table->json('voptions')->nullable();
            $table->json('voption_names')->nullable();
            $table->json('voption_values')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_details');
    }
};
