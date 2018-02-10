<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackMeetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_meets', function (Blueprint $table) {
            $table->increments('id');
            $table->date('meet_date');
            $table->unsignedSmallInteger('track_meet_name_id');
            $table->unsignedSmallInteger('track_venue_id');
            $table->unsignedSmallInteger('meet_host_id');
            $table->unsignedTinyInteger('timing_method_id');
            $table->unsignedTinyInteger('season_id');
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
        Schema::dropIfExists('track_meets');
    }
}
