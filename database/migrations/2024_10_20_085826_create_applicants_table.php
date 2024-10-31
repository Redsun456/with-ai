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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Reference to the 'users' table
            $table->string('student_number');
            $table->string('program_course');
            $table->string('year_section');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('contact_number');
            $table->string('email');
            $table->string('gender');
            $table->string('id_file')->nullable();
            $table->json('requirement_files')->nullable();
            $table->string('father_name');
            $table->date('father_birthday');
            $table->string('father_occupation');
            $table->decimal('father_salary', 10, 2);
            $table->string('father_address');
            $table->string('father_contact');
            $table->string('mother_name');
            $table->date('mother_birthday');
            $table->string('mother_occupation');
            $table->decimal('mother_salary', 10, 2);
            $table->string('mother_address');
            $table->string('mother_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
