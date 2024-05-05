<?php

namespace Krupka\TrapManager\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTrapsTable extends Migration
{

    public function up()
    {
        Schema::create('krupka_trapmanager_traps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('krupka_trapmanager_traps');
    }
}
