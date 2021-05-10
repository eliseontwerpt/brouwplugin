<?php namespace Hjp\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHjpBrouwerbouwerWaterprofiles extends Migration
{
    public function up()
    {
        Schema::create('hjp_brouwerbouwer_waterprofiles', function($table)
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
        Schema::dropIfExists('hjp_brouwerbouwer_waterprofiles');
    }
}