<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('is_default')->default(0)->comment("1=default address")->nullable();
            $table->string('address',200)->nullable();
            $table->string('suburb',200)->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->string('pincode',60)->nullable();
            $table->unsignedInteger('address_type')->comment("1=postal , 0= street")->nullable();
            $table->string('latitute',60)->nullable();
            $table->string('longitute',60)->nullable();
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
        Schema::dropIfExists('user_addresses');
    }
}
