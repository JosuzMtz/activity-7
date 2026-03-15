<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_student_groups', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('student_group_id');
            $table->timestamps();
            $table->primary(['course_id', 'student_group_id']);
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('student_group_id')->references('id')->on('student_groups');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('course_student_groups');
    }
};
