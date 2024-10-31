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
    Schema::table('applicants', function (Blueprint $table) {
        $table->string('status')->default('pending')->after('updated_at'); // Adjust position as needed
    });
}
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
