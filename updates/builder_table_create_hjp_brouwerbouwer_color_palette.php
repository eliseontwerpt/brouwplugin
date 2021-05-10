<?php namespace Hjp\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHjpBrouwerbouwerColorPalette extends Migration
{
    public function up()
    {
        Schema::create('hjp_brouwerbouwer_color_palette', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('ebc');
            $table->integer('srm');
            $table->integer('rgb_r');
            $table->integer('rgb_g');
            $table->integer('rgb_b');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hjp_brouwerbouwer_color_palette');
    }
}