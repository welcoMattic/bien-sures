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
      $table->longText('quote', 140);
      $table->string('status_', 15 )->nullable()->default( 'waiting' );
      $table->integer('typologie_id')->unsigned();
      $table->timestamps();
      $table->foreign('typologie_id')->references('id')->on('typologies')->onDelete('cascade');
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
