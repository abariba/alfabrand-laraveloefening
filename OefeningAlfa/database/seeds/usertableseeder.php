<?php

use Illuminate\Database\Seeder;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 10)->create();
    	// for ($i=0; $i < 10; $i++) { 
     //    DB::table('users')->insert([
     //        'name' => str_random(10),
     //        'email' => str_random(10).'@gmail.com',
     //        'password' => bcrypt('secret'),
     //        'level' =>rand(0,3),
     //        'created_at'=>date('Y-m-d H:i:s'),
     //        'updated_at'=>date('Y-m-d H:i:s'),

     //    ]);

            

     
    //}
    }
}
