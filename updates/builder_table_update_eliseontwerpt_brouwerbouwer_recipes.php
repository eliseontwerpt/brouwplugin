<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEliseontwerptBrouwerbouwerRecipes extends Migration
{
    public function up()
    {
        Schema::table('eliseontwerpt_brouwerbouwer_recipes', function($table)
        {
            $table->renameColumn('waterprofile_id', 'waterprofiles_id');
        });
    }
    
    public function down()
    {
        Schema::table('eliseontwerpt_brouwerbouwer_recipes', function($table)
        {
            $table->renameColumn('waterprofiles_id', 'waterprofile_id');
        });
    }
}
