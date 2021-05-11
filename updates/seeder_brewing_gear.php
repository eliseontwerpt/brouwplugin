<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Seeder;
use Db;

class Seeder_eliseontwerpt_brouwerbouwer_brewing_gear extends Seeder
	{
	public function run()
	{
		DB::table('eliseontwerpt_brouwerbouwer_brewing_gear')->insert([
        'name'  => "Harm Jan",
        'efficiency' => "72.0",
        'evaporation' => "27",
        'tubeloss' => "500",
        'waterprofile_id'=> "0"
        ]);
    }
}		