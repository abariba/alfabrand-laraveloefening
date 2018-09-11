<?php

use Illuminate\Database\Seeder;

class commentstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) 
        { 
	        DB::table('comments')->insert([
                'title' => str_random(30),
	            'body' => str_random(30),
	            'userid' =>rand(0,10),
	            'productid' =>rand(0,100),
	            'created_at'=>date('Y-m-d H:i:s'),
	            'updated_at'=>date('Y-m-d H:i:s'),
	        ]);
	    }
    }
}
