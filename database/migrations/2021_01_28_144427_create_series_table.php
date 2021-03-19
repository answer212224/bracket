<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('conference');
            $table->string('season');
            $table->integer('index_id');
            $table->bigInteger('top_team_win')->nullable();
            $table->bigInteger('top_team_id')->nullable();
            $table->bigInteger('down_team_win')->nullable();
            $table->bigInteger('down_team_id')->nullable();
            $table->bigInteger('win_team_id')->nullable();
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
        Schema::dropIfExists('series');
    }
}
