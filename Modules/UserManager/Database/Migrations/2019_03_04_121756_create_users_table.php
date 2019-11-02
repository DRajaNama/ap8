<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 200)->nullable();
            $table->string('contact_name', 200)->nullable();
            $table->string('email', 200);
            $table->string('mobile', 200);
            $table->string('phone', 200);
            $table->string('abn', 200)->nullable();
            $table->string('paypal_agreement_id', 200)->nullable();
            $table->dateTime('subscription_ends_at')->nullable();
            $table->string('username', 200)->nullable();
            $table->string('password', 200)->nullable();
            $table->boolean('status')->default(0)->comment("1=active, 0=in active");
            $table->boolean('is_verified')->default(0)->comment("1=verified, 0=not verified");
            $table->dateTime('last_active')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('profle_photo', 200)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
