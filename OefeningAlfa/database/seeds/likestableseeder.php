<?php

use Illuminate\Database\Seeder;

class likestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10000; $i++) 
        { 
	        DB::table('likes')->insert([
	            'like' => rand(0,1),
	            'userid' =>rand(0,10),
	            'comment_id' =>rand(0,100),

	        ]);
	    }

    }
}
