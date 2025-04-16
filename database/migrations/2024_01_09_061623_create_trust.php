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
        Schema::create('trust', function (Blueprint $table) {
            $table->id();
            $table->string('site_id');
            $table->string('trust_name')->unique();
            $table->string('site_name');
            $table->string('country')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('added_date')->nullable();
            $table->string('entity')->nullable();
            $table->string('location_info')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('doc_req')->nullable();
            $table->string('change_since_last_month')->nullable();
            $table->string('employer')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trust');
    }
};
