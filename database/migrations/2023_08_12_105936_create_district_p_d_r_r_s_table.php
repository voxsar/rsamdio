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
        Schema::create('district_p_d_r_r_s', function (Blueprint $table) {
            $table->id();
            //name year and profile image location
            $table->string('name')->nullable();
            $table->string('year')->nullable();
            $table->string('profile_image')->nullable();
            //link to districts table
            $table->foreignId('district_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('district_p_d_r_r_s');
    }
};
