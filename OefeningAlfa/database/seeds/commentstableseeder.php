<?php
use database\factories\Comment;
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
        $comments = factory(App\Comment::class, 100)->create();
     //    for ($i=0; $i < 100; $i++) 
     //    { 
	    //     DB::table('comments')->insert([
     //            'title' => str_random(30),
	    //         'body' => str_random(30),
	    //         'user_id' =>rand(0,10),
	    //         'product_id' =>rand(0,100),
	    //         'created_at'=>date('Y-m-d H:i:s'),
	    //         'updated_at'=>date('Y-m-d H:i:s'),
	    //     ]);
	    // }
    }
}
