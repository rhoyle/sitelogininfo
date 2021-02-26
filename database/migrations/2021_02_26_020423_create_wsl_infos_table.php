<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWslInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wsl_infos', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('user_name');
            $table->string('users_email');
            $table->string('url');
            $table->string('password');
            $table->string('contact_person');
            $table->string('account_number');
            $table->string('site_pin');
            $table->string('security_question_1');
            $table->string('security_answer_1');
            $table->string('security_question_2');
            $table->string('security_answer_2');
            $table->string('security_question_3');
            $table->string('security_answer_3');
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
        Schema::dropIfExists('wsl_infos');
    }
}
