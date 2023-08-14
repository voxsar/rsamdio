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
        Schema::create('quarterly_report_c_p_s', function (Blueprint $table) {
            $table->id();
            //avenue of service
            $table->string('avenue_of_service')->nullable();
            //7 areas of focus
            $table->string('area_of_focus')->nullable();
            //project name
            $table->string('project_name')->nullable();
            //project description text
            $table->text('project_description')->nullable();
            //income
            $table->string('income')->nullable();
            //expenditure
            $table->string('expense')->nullable();
            //project images array
            $table->json('project_images')->nullable();
            //link quarterly_reports
            $table->foreignId('quarterly_report_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quarterly_report_c_p_s');
    }
};
