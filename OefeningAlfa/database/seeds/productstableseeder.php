<?php

use Illuminate\Database\Seeder;

class productstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $comments = factory(App\Products::class, 10)->create(); 
     //    for ($i=0; $i < 100; $i++) 
     //    { 
	    //     DB::table('products')->insert([
	    //     	'name' => str_random(30),
	    //         'body' => str_random(30),
	    //         'userid' =>rand(0,10),
	    //         'price' =>rand(0.1,30.3),
	    //         'ammount' =>rand(0,10),
	    //         'created_at'=>date('Y-m-d H:i:s'),
	    //         'updated_at'=>date('Y-m-d H:i:s'),
	    //     ]);
	    // }


    }
}
