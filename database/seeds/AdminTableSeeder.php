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
        \App\Admin::create([
            'fullname' => 'Prakash Gautam',
            'username' => 'Prakash',
            'email' => 'prakash@gmail.com',
            'password' => bcrypt('123')

        ]);
    }
}
