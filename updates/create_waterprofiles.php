<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Waterprofiles extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_waterprofiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('calcium');
            $table->integer('magnesium');
            $table->integer('natrium');
            $table->integer('chloride');
            $table->integer('sulfate');
            $table->integer('bicarbonate');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_waterprofiles');
    }
}