<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
{
    Schema::create('Application', function (Blueprint $table) {
        $table->id();
        $table->string('Snumber');
        $table->string('ea');
        $table->string('pass');
        $table->timestamps();
    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('Application');
    }
};
