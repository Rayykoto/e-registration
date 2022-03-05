<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoPatientOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ro_patient_order', function (Blueprint $table) {
            $table->id('order_id');
            $table->integer('patient_id');
            $table->integer('company_id');
            $table->integer('paymen_id');
            $table->integer('output_id',);
            $table->string('output');
            $table->string('order_no');
            $table->string('order_price');
            $table->string('order_status');
            $table->string('create_user');
            $table->string('update_user');
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
        Schema::dropIfExists('ro_patient_order');
    }
}
