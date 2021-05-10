<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class  Hops extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_hops', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('recipe_id');
            $table->decimal('ibu',10,2);
            $table->integer('hop_list_id');
            $table->decimal('alpha',10,1);
            $table->integer('time')->default(60);
            $table->boolean('dryhop')->default(0);
            $table->boolean('hoptype')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_hops');
    }
    
}