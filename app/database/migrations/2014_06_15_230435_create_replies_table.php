<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('replies', function(Blueprint $table)
    {
      $table->increments('id');
      $table->longText('quote');
      $table->string('status_', 15)->nullable();
      $table->integer('offensive_id')->unsigned();
      $table->timestamps();
      $table->foreign('offensive_id')->references('id')->on('offensives')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('replies');
  }

}
