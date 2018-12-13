<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();

        $items = array(

        	array(
        		'heading' => 'Hardness of Rock',
        		'details' => '6.5',
        		'user_id' => '2',
        	),

        	array(
        		'heading' => 'Specific Gravity of Rock',
        		'details' => '2.56 - 2.81 (Average - 2.70)',
        		'user_id' => '3',
        	),

        	array(
        		'heading' => 'Compressive Strength of Rock',
        		'details' => '24000 PSI',
        		'user_id' => '2',
        	),

        	array(
        		'heading' => 'Type of Deposit',
        		'details' => 'Granodiorite, Granite, Gneiss, etc.',
        		'user_id' => '3',
        	),
        );

        DB::table('items')->insert($items);
    }
}
