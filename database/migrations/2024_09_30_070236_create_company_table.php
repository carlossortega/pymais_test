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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('rfc', 15)->nullable();
            $table->string('trade_name')->nullable();
            $table->string('company_email', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('naics_code')->nullable();
            $table->text('products_services')->nullable();
            $table->integer('number_employees')->nullable();
            $table->string('company_seniority')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email', 50)->nullable();
            $table->string('contact_phone', 20)->nullable();
            $table->string('contact_position')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->string('company_social_net')->nullable();
            $table->string('company_website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
