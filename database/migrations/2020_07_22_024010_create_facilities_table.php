<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('name');
            $table->unsignedInteger('official_id')->index()->nullable();
            $table->unsignedInteger('city_id')->index()->nullable();
            $table->longText('latitude');
            $table->longText('longitude');
            $table->longText('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('slug')->nullable();
            $table->string('invested_sum')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
