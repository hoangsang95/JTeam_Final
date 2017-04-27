<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        DB::table('user')->insert([
            'User_Name' => 'Administrator',
            'User_Email' => 'admin@admin.com',
            'User_Password' => bcrypt('123456'),
            'User_RootAdmin' => 1
            
        ]);
    }

}
