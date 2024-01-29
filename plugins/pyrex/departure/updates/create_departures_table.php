<?php namespace Pyrex\Departure\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDeparturesTable extends Migration
{
    public function up()
    {
        Schema::create('pyrex_departure_departures', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pyrex_departure_departures');
    }
}
