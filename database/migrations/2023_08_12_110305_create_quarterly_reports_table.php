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
        Schema::create('quarterly_reports', function (Blueprint $table) {
            $table->id();
            //total rotaract clubs
            $table->string('total_rotaract_clubs')->nullable();
            //total rotaractors
            $table->string('total_rotaractors')->nullable();
            //total charter clubs and recharter clubs
            $table->string('total_charter_clubs')->nullable();
            //new rotaractors
            $table->string('total_new_rotaractors')->nullable();
            //district newsletter link
            $table->string('district_newsletter_link')->nullable();
            //total club service projects
            $table->string('total_club_service_projects')->nullable();
            //total community service projects
            $table->string('total_community_service_projects')->nullable();
            //total international service projects
            $table->string('total_international_service_projects')->nullable();
            //total professional development service projects
            $table->string('total_professional_development_service_projects')->nullable();
            //total other service projects
            $table->string('total_other_service_projects')->nullable();
            
            $table->foreignId('district_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quarterly_reports');
    }
};
