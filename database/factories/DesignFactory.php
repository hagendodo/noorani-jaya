<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Design;
use App\Models\Material;
use App\Models\Type;
use App\Models\User;

class DesignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Design::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(4),
            'file' => $this->faker->regexify('[A-Za-z0-9]{2048}'),
            'type_id' => Type::factory(),
            'material_id' => Material::factory(),
            'date_insert' => $this->faker->dateTime(),
            'deadline' => $this->faker->dateTime(),
            'notes' => $this->faker->text(),
        ];
    }
}
