<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffensivesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('offensives', function(Blueprint $table)
    {
      $table->increments('id');
      $table->longText('quote');
      $table->longText('description');
      $table->integer('typology_id')->unsigned();
      $table->timestamps();
      $table->foreign('typology_id')->references('id')->on('typologies')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('offensives');
  }

}
