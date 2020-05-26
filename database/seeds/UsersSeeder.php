<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' =>  'admin@domain.com',
            'password' => bcrypt('admin123'),
        ]);

        $user->assign('admin');
    }
}