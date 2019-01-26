<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header', function (Blueprint $table) {
            $table->increments('id');
            $table->text('logo_text');
            $table->text('text');
            $table->text('byline_text');
            $table->string('text_color', 30);
            $table->string('text_size', 10);
            $table->string('byline_text_color', 30);
            $table->string('byline_text_size', 10);
            $table->string('logo_text_color', 30);
            $table->string('logo_text_size', 10);
            $table->string('menu_text_color', 30);
            $table->string('menu_text_size', 10);
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
        Schema::dropIfExists('header');
    }
}
