<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class MaltAdjunctList extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_malt_adjunct_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('ebc');
            $table->decimal('yield', 10,3);
            $table->decimal('extraction', 10,2);
            $table->decimal('max', 10,2);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_malt_adjunct_list');
    }
}