<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ro_company', function (Blueprint $table) {
            $table->id('company_id');
            $table->string('company_name', 50);
            $table->string('company_address');
            $table->string('company_city', 6);
            $table->string('company_code');
            $table->string('company_branch');
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
        Schema::dropIfExists('ro_company');
    }
}
