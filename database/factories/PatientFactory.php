<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Patient::class;
     
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->name,
            'last_name'=> $this->faker->name,
            'gender' => $this->faker->text,
            'date_of_birth'=> $this->faker->date,
            'facebook_name' => $this->faker->email,
            'package' => $this->faker->text,
            'phone_number' => $this->faker->phoneNumber,
            'date_of_next_visit' => $this->faker->date,
            'address' => $this->faker->address,
        ];
    }
}
