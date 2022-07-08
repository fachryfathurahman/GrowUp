<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrowthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('growths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('child_id');
            $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('zScore');
            $table->timestamps();
            $table->softDeletes();
            // $table->integer('first_month_weight');
            // $table->integer('sixth_month_weight');
            // $table->integer('twelfth_month_weight');
            // $table->integer('eighteenth_month_weight');
            // $table->integer('twentyfourth_month_weight');
            // $table->integer('thirtieth_weight');
            // $table->integer('thirtysixth_month_weight');
            // $table->integer('fortysecond_month_weight');
            // $table->integer('fortyeighth_month_weight');
            // $table->integer('fiftyfourth_month_weight');
            // $table->integer('sixtieth_month_weight');
            // $table->integer('first_month_length');
            // $table->integer('sixth_month_length');
            // $table->integer('twelfth_month_length');
            // $table->integer('eighteenth_month_length');
            // $table->integer('twentyfourth_month_length');
            // $table->integer('thirtieth_length');
            // $table->integer('thirtysixth_month_length');
            // $table->integer('fortysecond_month_length');
            // $table->integer('fortyeight_month_length');
            // $table->integer('fiftyfourth_month_length');
            // $table->integer('sixtieth_month_length');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('growths');
    }
}
