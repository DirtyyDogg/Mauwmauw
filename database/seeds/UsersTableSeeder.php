<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$lA3p1YHnQvijXShRxGUshet3KZYe38tOwJUWgFgxINKUdUgfvM7Jy',
            'remember_token' => null,
            'created_at'     => '2019-07-02 02:53:18',
            'updated_at'     => '2019-07-02 02:53:18',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
