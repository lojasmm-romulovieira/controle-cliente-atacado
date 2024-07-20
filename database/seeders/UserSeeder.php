<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = config('users.users');

        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
