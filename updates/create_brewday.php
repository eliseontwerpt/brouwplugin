<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Brewday extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_brouwerbouwer_brewday', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('recipe_id');
            $table->date('date_brewday');
            $table->decimal('og',10,3)->nullable();
            $table->decimal('og_masch', 10,3)->nullable();
            $table->decimal('fg',10,3)->nullable();
            $table->decimal('abv',10,2)->nullable();
            $table->date('date_bottle')->nullable();
            $table->date('date_dryhop')->nullable();
            $table->text('comment_malts')->nullable();
            $table->text('comment_hops')->nullable();
            $table->text('comment_mash')->nullable();
            $table->text('comment_boil')->nullable();
            $table->text('comment_fermentation')->nullable();
            $table->text('comment_bottleling')->nullable();
            $table->text('comment_tasting')->nullable();
            $table->integer('score')->nullable();
            $table->text('yeast')->nullable();
            $table->integer('flocculation')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_brouwerbouwer_brewday');
    }
}