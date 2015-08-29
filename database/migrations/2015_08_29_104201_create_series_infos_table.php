<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Genre');
            $table->date('Start');
            $table->date('Finish');
            $table->text('Description');
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
        Schema::drop('series_infos');
    }
}
