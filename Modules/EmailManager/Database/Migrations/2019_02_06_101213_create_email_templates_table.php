<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('email_hook_id');
            $table->foreign('email_hook_id')->references('id')->on('email_hooks');
            $table->string('subject',250);
            $table->text('description');
            $table->text('footer_text');
            $table->unsignedInteger('email_preference_id');
            $table->foreign('email_preference_id')->references('id')->on('email_preferences');
            $table->boolean('status')->default(1)->comment("1=active, 0=in active");
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
        Schema::dropIfExists('email_templates');
    }
}
