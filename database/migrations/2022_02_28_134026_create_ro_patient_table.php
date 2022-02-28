<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ro_patient', function (Blueprint $table) {
            $table->id('patient_id');
            $table->integer('user_id');
            $table->integer('title_id');
            $table->string('patient_name', 50);
            $table->string('handphone', 12);
            $table->string('postal_code', 150);
            $table->string('city');
            $table->string('sex');
            $table->string('age', 30);
            $table->string('job_title', 50);
            $table->string('email', 150);
            $table->string('nik', 20);
            $table->string('passport', 20);
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
        Schema::dropIfExists('ro_patient');
    }
}
