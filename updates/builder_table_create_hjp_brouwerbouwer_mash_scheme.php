<?php namespace Hjp\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHjpBrouwerbouwerMashScheme extends Migration
{
    public function up()
    {
        Schema::create('hjp_brouwerbouwer_mash_scheme', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->decimal('temperature', 10,1);
            $table->integer('time');
            $table->integer('recipe_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hjp_brouwerbouwer_mash_scheme');
    }
}