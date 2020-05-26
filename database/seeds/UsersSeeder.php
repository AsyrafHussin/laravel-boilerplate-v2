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
        $users = [
            'admin' => [
                'name' => 'admin',
                'email' => 'admin@domain.com',
                'password' => 'admin123'
            ]
        ];

        foreach ($users as $key => $user) {
            $user = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
            ]);
            $user->assign($key);
        }
    }
}
