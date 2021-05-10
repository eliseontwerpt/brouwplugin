<?php namespace Eliseontwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class  ColorPalette extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_color_palette', function($table)
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
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_color_palette');
    }
}