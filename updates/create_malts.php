<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class  Malts extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_malts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('recipe_id');
            $table->decimal('percentage',10,2);
            $table->integer('malt_list_id');
            $table->boolean('mash')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_malts');
    }
    
}