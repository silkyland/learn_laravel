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
        $user = new \App\User();
        $user->name = "Bundit Nuntates";
        $user->username = "admin";
        $user->email = "bundit_nun@cmru.ac.th";
        $user->password = bcrypt('1234');
        $user->save();

        //INSERT INTO users ( name, username, email, password)
        //VALUES ( 'Bundit Nuntates', 'admin', 'bundit_nun@cmru.ac.th', 'random_number ');

    }
}
