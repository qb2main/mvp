<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schema_id')->unsigned()->nullable();
            $table->foreign('schema_id')->references('id')->on('schemas')->onDelete('cascade');
            $table->text('logo_text')->nullable();
            $table->text('text')->nullable();
            $table->text('byline_text')->nullable();
            $table->string('text_color', 30)->nullable();
            $table->string('text_size', 10)->nullable();
            $table->string('byline_text_color', 30)->nullable();
            $table->string('byline_text_size', 10)->nullable();
            $table->string('logo_text_color', 30)->nullable();
            $table->string('logo_text_size', 10)->nullable();
            $table->string('menu_text_color', 30)->nullable();
            $table->string('menu_text_size', 10)->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('headers');
    }
}
