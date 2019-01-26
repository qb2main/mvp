<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');

            $table->string('wrapper_title');
            $table->text('wrapper_text');
            $table->text('wrapper_byline_text');

            $table->string('welcome_title');
            $table->text('welcome_text');
            $table->text('welcome_byline_text');

            $table->string('contact_title');
            $table->text('contact_text');
            $table->text('contact_byline_text');

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
        Schema::dropIfExists('content');
    }
}
