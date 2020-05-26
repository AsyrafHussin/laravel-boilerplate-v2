<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin'];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'title' => $role,
            ]);
        }
    }
}
