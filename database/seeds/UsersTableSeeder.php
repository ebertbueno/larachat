<?php

use App\Entities\User;
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
        User::create([
            'name' => 'Common User',
            'email' => 'test@test.com',
            'avatar' => 'https://randomuser.me/api/portraits/men/4.jpg',
            'password' => bcrypt('password')
        ]);

        factory(User::class, 10)->create();
    }
}