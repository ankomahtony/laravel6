<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('index_number')->unique();
            $table->string('last_name');
            $table->string('other_name');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('mother');
            $table->string('father');
            $table->string('guardian');
            $table->date('dob');
            $table->string('class');
            $table->text('postal_address');
            $table->string('town');
            $table->string('gps_address');
            $table->string('district');
            $table->string('region');
            $table->string('religion');
            $table->string('picture');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
