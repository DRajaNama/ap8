<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('subscription_plans');
            $table->dateTime('subscription_ends_at')->nullable();
            $table->string('paypal_plan_id')->nullable();
            $table->string('agreement_id')->nullable();
            
            $table->unsignedTinyInteger('status')->default(0)->comment("0=pendidng, 1=active,3=suspend");
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
        Schema::dropIfExists('user_subscriptions');
    }
}
