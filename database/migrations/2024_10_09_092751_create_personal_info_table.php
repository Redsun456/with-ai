<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('personal_info', function (Blueprint $table) {
        $table->id();
        $table->string('student_number');
        $table->string('program_course');
        $table->string('year_section');
        $table->string('full_name');
        $table->date('date_of_birth');
        $table->string('address');
        $table->string('contact_number');
        $table->string('email_address');
        $table->string('gender')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_info');
    }
};
