<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('parent_infos', function (Blueprint $table) {
            $table->id();
            // Father's information
            $table->string('father_name');
            $table->date('father_birthday');
            $table->string('father_occupation');
            $table->decimal('father_salary', 10, 2);
            $table->string('father_address');
            $table->string('father_contact_number');
            
            // Mother's information
            $table->string('mother_name');
            $table->date('mother_birthday');
            $table->string('mother_occupation');
            $table->decimal('mother_salary', 10, 2);
            $table->string('mother_address');
            $table->string('mother_contact_number');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parent_infos');
    }
};
