<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ro_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name');
            $table->string('user_pwd');
            $table->string('user_lvl');
            $table->string('user_email');
            $table->string('sign_image');
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
        Schema::dropIfExists('ro_user');
    }
}
