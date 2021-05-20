<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BjcpCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_bjcp_categories');
        Schema::create('eliseontwerpt_brouwerbouwer_bjcp_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('categorie_id');
            $table->string('name');
            $table->text('description');
        });
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_bjcp_sub_categories');
        Schema::create('eliseontwerpt_brouwerbouwer_bjcp_sub_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('categorie_id');
            $table->string('sub_categorie_id');
            $table->string('name');
            $table->decimal('abv_min',10,2)->default(0);
            $table->decimal('abv_max',10,2)->default(0);
            $table->integer('ibu_min')->default(0);
            $table->integer('ibu_max')->default(0);
            $table->integer('ebc_min')->default(0);
            $table->integer('ebc_max')->default(0);
            $table->decimal('og_min',10,3)->default(0);
            $table->decimal('og_max',10,3)->default(0);
            $table->decimal('fg_min',10,3)->default(0);
            $table->decimal('fg_max',10,3)->default(0);
            $table->decimal('bugu_min',10,2)->default(0);
            $table->decimal('bugu_max',10,2)->default(0);
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
            $table->text('tags')->nullable();
        });   
             
    }

    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_bjcp_categories');
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_bjcp_sub_categories');
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_bjcp_data');
    }
}
