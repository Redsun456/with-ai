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
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('guadrian_name')->nullable()->after('program_course');
            $table->date('guardian_birthday')->nullable()->after('guardian_name');
            $table->string('guardian_occupation')->nullable()->after('guardian_birthday');
            $table->decimal('guardian_salary', 10, 2)->nullable()->after('guardian_occupation');
            $table->string('guardian_address')->nullable()->after('guardian_salary');
            $table->string('guardian_contact')->nullable()->after('guardian_address');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn('guadrian_name');
            $table->dropColumn('guardian_birthday');
            $table->dropColumn('guardian_occupation');
            $table->dropColumn('guardian_salary');
            $table->dropColumn('guardian_address');
            $table->dropColumn('guardian_contact');
        });
    }
};
