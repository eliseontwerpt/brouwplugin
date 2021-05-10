<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class MashScheme extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_mash_scheme', function($table)
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
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_mash_scheme');
    }
}