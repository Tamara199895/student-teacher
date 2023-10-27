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
        Schema::create('ratebook', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('group');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('student');
            $table->bigInteger('lesson_no');
            $table->bigInteger('mark')->nullable();
            $table->string('comment')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratebook');
    }
};
