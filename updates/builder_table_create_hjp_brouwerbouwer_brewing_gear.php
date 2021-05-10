<?php namespace Hjp\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHjpBrouwerbouwerBrewingGear extends Migration
{
    public function up()
    {
        Schema::create('hjp_brouwerbouwer_brewing_gear', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->decimal('efficiency', 10,1)->default(70);
            $table->integer('evaporation')->default(25);
            $table->integer('tubeloss')->default(500);
            $table->integer('waterprofile_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hjp_brouwerbouwer_brewing_gear');
    }
}