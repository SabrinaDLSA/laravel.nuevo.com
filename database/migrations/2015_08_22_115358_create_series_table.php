<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('series', function (Blueprint $table) {
          $table->increments('id');
          $table->string('serie');
          $table->string('main_actors');
          $table->string('actors');
          $table->enum('genre', ['Action', 'Drama', 'Terror', 'Romantic',
          'Musical', 'Adventure', 'Others']);
          $table->string('photo');
          $table->date('start');
          $table->date('finish');
          $table->text('description');
          $table->string('director');
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
      Schema::drop('series');
  }
}
