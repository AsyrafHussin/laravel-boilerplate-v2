<?php

use App\User;
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
        $user           = new User();
        $user->name     = 'admin';
        $user->email    = 'admin@domain.com';
        $user->password = bcrypt('admin123');
        $user->save();
        $user->assign('admin');
    }
}
