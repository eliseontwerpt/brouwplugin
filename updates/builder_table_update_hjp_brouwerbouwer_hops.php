<?php namespace Hjp\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHjpBrouwerbouwerHops extends Migration
{
    public function up()
    {
        Schema::table('hjp_brouwerbouwer_hops', function($table)
        {
            $table->integer('grams')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('hjp_brouwerbouwer_hops', function($table)
        {
            $table->dropColumn('grams');
        });
    }
}