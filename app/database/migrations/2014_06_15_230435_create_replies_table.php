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
      $table->foreign('offensive_id')->references('id')->on('offensive');
      $table->boolean('status_')->nullable();
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
    Schema::drop('replies');
  }

}
