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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('body');
            $table->text('image')->nullable();
            $table->integer('numbersubjects');
            $table->integer('numbercourses');
            $table->integer('numberinstructors');
            $table->integer('numberstudents');
            $table->string('subjects');
            $table->string('courses');
            $table->string('instructors');
            $table->string('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
