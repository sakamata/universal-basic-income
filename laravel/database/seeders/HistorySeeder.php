<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

// use HasFactory;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        History::factory()
                // ->hasPosts()
                ->times(50)
                ->create();
    }
}
