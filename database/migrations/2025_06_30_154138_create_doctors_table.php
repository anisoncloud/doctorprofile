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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //$table->integer('department_id')->unsigned();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->text('biography')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('short_description')->nullable();
            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
