<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admins')->insert([
            [
                'fullname' => 'Prakash Neupane',
                'username' => 'Prkash',
                'email' => 'prakash@gmail.com',
                'password' => bcrypt('123')
            ],
            [
                'fullname' => 'Manish Shrestha',
                'username' => 'Manish',
                'email' => 'manish@gmail.com',
                'password' => bcrypt('123')
            ]


        ]);
    }
}
