<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BjcpValues extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_bjcp_values', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('value');
            $table->string('subcategories')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_bjcp_values');
    }
}