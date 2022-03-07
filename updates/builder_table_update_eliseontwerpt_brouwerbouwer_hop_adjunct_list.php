<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEliseontwerptBrouwerbouwerHopAdjunctList extends Migration
{
    public function up()
    {
        Schema::table('eliseontwerpt_brouwerbouwer_hop_adjunct_list', function($table)
        {
            $table->renameColumn('variety', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('eliseontwerpt_brouwerbouwer_hop_adjunct_list', function($table)
        {
            $table->renameColumn('name', 'variety');
        });
    }
}
