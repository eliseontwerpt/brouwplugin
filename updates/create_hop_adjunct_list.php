<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class HopAdjunctList extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_hop_adjunct_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('variety');
            $table->decimal('alpha_min',10,1);
            $table->decimal('alpha_max',10,1);
            $table->string('origin');
            $table->text('aroma')->nullable();
            $table->text('substitutions')->nullable();
            $table->text('purpose')->nullable();
            $table->text('styles')->nullable();
            $table->text('descriptions')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_hop_adjunct_list');
    }
}