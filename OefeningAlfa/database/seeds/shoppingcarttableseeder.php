<?php

use Illuminate\Database\Seeder;

class shoppingcarttableseeder extends Seeder
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
	        DB::table('shoppingcart')->insert([
	            'user_id' =>rand(0,10),
	            'product_id' =>rand(0,100),

	        ]);
	    }
    }
}
