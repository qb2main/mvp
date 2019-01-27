<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schema_id')->unsigned()->nullable();
            $table->foreign('schema_id')->references('id')->on('schemas')->onDelete('cascade');
            $table->text('text')->nullable();
            $table->string('text_size', 10)->nullable();
            $table->string('text_color', 30)->nullable();
            $table->string('background_color', 30)->nullable();
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
        Schema::dropIfExists('footers');
    }
}
