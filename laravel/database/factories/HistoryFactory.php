<?php

namespace Database\Factories;

use App\Models\History;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = History::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'send_user_id' => User::all()->count() == 0 ? 1: User::inRandomOrder()->first()->id,
            'receive_user_id' => User::all()->count() == 0 ? 1: User::inRandomOrder()->first()->id,
            'point' => rand(1, 100),
            'send_user_balance' => rand(1, 100),
            'receive_user_balance' => rand(1, 100),
        ];
    }
}
