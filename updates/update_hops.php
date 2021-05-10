<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Hops extends Migration
{
    public function up()
    {
        Schema::table('eliseontwerpt_brouwerbouwer_hops', function($table)
        {
            $table->integer('grams')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('eliseontwerpt_brouwerbouwer_hops', function($table)
        {
            $table->dropColumn('grams');
        });
    }
}