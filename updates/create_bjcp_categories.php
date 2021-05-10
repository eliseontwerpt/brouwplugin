<?php namespace Eliseontwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BjcpCategories extends Migration
{
    public function up()
    {
        Schema::create('eliseonwerpt_brouwerbouwer_bjcp_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('bjcp_id');
            $table->string('categorie');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseonwerpt_brouwerbouwer_bjcp_categories');
    }
}
