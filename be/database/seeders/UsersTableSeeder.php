<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2023-09-15 15:44:08',
                'email' => 'ajimenezescobar@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Angel Jimenez ',
                'password' => '$2y$10$jFu4KIYjb4Sdq36wsm6Hh.SE7wG.EsiML5/48cuf5LOCFEiWeopE6',
                'remember_token' => NULL,
                'updated_at' => '2023-09-15 15:44:08',
            ),
        ));
        
        
    }
}