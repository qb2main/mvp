<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schema_id')->unsigned()->nullable();
            $table->foreign('schema_id')->references('id')->on('schemas')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('seo_properties');
    }
}
