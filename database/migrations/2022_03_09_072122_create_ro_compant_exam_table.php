<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoCompantExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ro_compant_exam', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id',);
            $table->integer('exam_id',);
            $table->string('create_user', 50);
            $table->string('update_user', 50);
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
        Schema::dropIfExists('ro_compant_exam');
    }
}
