<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoCompanyPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ro_company_payment', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->integer('paymen_id');
            $table->string('paymen_token',);
            $table->string('create_user',);
            $table->string('update_user',);
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
        Schema::dropIfExists('ro_company_payment');
    }
}
