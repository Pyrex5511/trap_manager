<?php namespace Krupka\Trapmanager\Updates;

use Krupka\TrapManager\Models\Trap;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTrapEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('krupka_trapmanager_trap_entries', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('percentage')->nullable();
            $table->integer('count')->nullable();
            $table->string('name');
            $table->bigInteger("trap_id")->index();
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('krupka_trapmanager_trap_entries');
    }
}
