<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('trasport_type')->nullable();
            $table->unsignedInteger('email_notification')->comment("1=yes , 0= no")->default(0)->nullable();
            $table->unsignedInteger('phone_notification')->comment("1=yes , 0= no")->default(0)->nullable();
            $table->string('email_for_notification',100)->nullable();
            $table->string('phone_for_notification',100)->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
