<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Invoice;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paid = $this->faker->boolean();
        return [
            'user_id' => User::all()->random()->id,
            'type' => $this->faker->randomElement(['B', 'C', 'P']),
            'paid' => $paid,
            'value' => $this->faker->numberBetween(1000, 10000),
            'payment_date' => $paid ? $this->faker->date() : null,
        ];
    }
}
