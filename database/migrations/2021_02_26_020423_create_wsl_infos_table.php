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
            $table->string('url');
            $table->string('site_name')->nullable();
            $table->string('user_name');
            $table->string('users_email');
            $table->string('password');
            $table->string('contact_person')->nullable();
            $table->string('account_number')->nullable();
            $table->string('miscellaneous')->nullable();
            $table->string('site_pin')->nullable();
            $table->string('security_question_1')->nullable();
            $table->string('security_answer_1')->nullable();
            $table->string('security_question_2')->nullable();
            $table->string('security_answer_2')->nullable();
            $table->string('security_question_3')->nullable();
            $table->string('security_answer_3')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
