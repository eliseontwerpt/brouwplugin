<?php namespace Eliseontwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BjcpGuide extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_bjcp_guide', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('styles');
            $table->integer('categories_id');
            $table->integer('style_family_id');
            $table->integer('style_history_id')->nullable();
            $table->integer('origin_id');
            $table->string('bjcp_categories_id');
            $table->decimal('abv_min',10,2);
            $table->decimal('abv_max',10,2);
            $table->integer('ibu_min');
            $table->integer('ibu_max');
            $table->integer('ebc_min');
            $table->integer('ebc_max');
            $table->decimal('og_min',10,3);
            $table->decimal('og_max',10,3);
            $table->decimal('fg_min',10,3);
            $table->decimal('fg_max',10,3);
            $table->decimal('bugu_min',10,2)->nullable();
            $table->decimal('bugu_max',10,2)->nullable();
            $table->text('overall_impression')->nullable();
            $table->text('aroma')->nullable();
            $table->text('appearance')->nullable();
            $table->text('flavor')->nullable();
            $table->text('mouthfeel')->nullable();
            $table->text('comments')->nullable();
            $table->text('history')->nullable();
            $table->text('characteristic_ingredients')->nullable();
            $table->text('style_comparison')->nullable();
            $table->text('commercial_examples')->nullable();
            $table->text('notes')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_bjcp_guide');
    }
}