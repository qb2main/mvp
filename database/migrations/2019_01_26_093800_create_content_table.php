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

            $table->string('wrapper_title')->nullable();
            $table->text('wrapper_text')->nullable();
            $table->text('wrapper_byline_text')->nullable();
            $table->string('wrapper_title_color', 30)->nullable();
            $table->string('wrapper_title_size', 10)->nullable();
            $table->string('wrapper_text_color', 30)->nullable();
            $table->string('wrapper_text_size', 10)->nullable();
            $table->string('wrapper_byline_text_color', 30)->nullable();
            $table->string('wrapper_byline_text_size', 10)->nullable();
            $table->string('wrapper_background_color', 30)->nullable();

            $table->string('welcome_title')->nullable();
            $table->text('welcome_text')->nullable();
            $table->text('welcome_byline_text')->nullable();
            $table->string('welcome_title_color', 30)->nullable();
            $table->string('welcome_title_size', 10)->nullable();
            $table->string('welcome_text_color', 30)->nullable();
            $table->string('welcome_text_size', 10)->nullable();
            $table->string('welcome_byline_text_color', 30)->nullable();
            $table->string('welcome_byline_text_size', 10)->nullable();
            $table->string('welcome_background_color', 30)->nullable();

            $table->string('contact_title')->nullable();
            $table->text('contact_text')->nullable();
            $table->text('contact_byline_text')->nullable();
            $table->string('contact_title_color', 30)->nullable();
            $table->string('contact_title_size', 10)->nullable();
            $table->string('contact_text_color', 30)->nullable();
            $table->string('contact_text_size', 10)->nullable();
            $table->string('contact_byline_text_color', 30)->nullable();
            $table->string('contact_byline_text_size', 10)->nullable();
            $table->string('contact_background_color', 30)->nullable();


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
