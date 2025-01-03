<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Design;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'design_id' => Design::factory(),
            'order_type' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'payment_type' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
