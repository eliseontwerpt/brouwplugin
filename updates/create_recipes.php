<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Recipes extends Migration
{    
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_recipes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);            
            $table->decimal('og', 10, 3);
            $table->decimal('fg', 10, 3)->nullable();
            $table->integer('volume');
            $table->integer('ebc')->default(0);
            $table->integer('ibu')->default(0);
            $table->integer('boil_time');
            $table->integer('gear_id');
            $table->integer('bjcp_id');
            $table->decimal('mash_ratio', 10, 2)->default(3.50);
            $table->integer('waterprofile_id')->default(0);;            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_recipes');
    }

}