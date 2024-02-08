<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admins;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admins>
 */
class AdminsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'user'=>'Kobe',
                'password'=>bcrypt('pepper22'),
                'role'=>1
            ],
            [
                'user' => 'Jeremiah',
                'password' => bcrypt('pepper22'),
                'role' => 2
            ]
        ];
    }
}
