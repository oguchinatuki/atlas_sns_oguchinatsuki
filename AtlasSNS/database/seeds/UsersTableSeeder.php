<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => '山田さん',
            'mail' => 'aaaaa@',
            'password' => bcrypt('12345'),
            ]


        ]);
    }
}
