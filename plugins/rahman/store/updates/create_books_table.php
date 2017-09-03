<?php namespace Rahman\Store\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('rahman_store_books', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->integer('download');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rahman_store_books');
    }
}
