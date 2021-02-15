<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'aaa@example.com',
            'unique_id' => 'aaaaaa1234567890',
            ]);
        User::factory()->create([
            'email' => 'bbb@example.com',
            'unique_id' => 'bbbbbb1234567890',
            ]);
        User::factory()
                // ->hasPosts()
                ->times(50)
                ->create();
    }
}
