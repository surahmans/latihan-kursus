<?php namespace Rahman\Store\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMagazinesTable extends Migration
{
    public function up()
    {
        Schema::create('rahman_store_magazines', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rahman_store_magazines');
    }
}
