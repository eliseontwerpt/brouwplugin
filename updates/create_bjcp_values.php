<?php namespace Hjp\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHjpBrouwerbouwerBjcpValues extends Migration
{
    public function up()
    {
        Schema::create('hjp_brouwerbouwer_bjcp_values', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('value');
            $table->string('subcategories')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hjp_brouwerbouwer_bjcp_values');
    }
}