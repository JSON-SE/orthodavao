<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'middlename' => $this->faker->lastName(),
            'lastname' => $this->faker->lastName(),
            'suffix' => $this->faker->suffix(),
            'age' => $this->faker->numerify('##'),
            'sex' => $this->faker->randomElement(['Male', 'Female', 'Rather Not Say']),
            'civil_status' => $this->faker->randomElement(['Single', 'Married', 'Divorced', 'Separated', 'Widowed']),
            'address' => $this->faker->address(),
            'contact' => $this->faker->phoneNumber(),
            'occupation' => $this->faker->jobTitle(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
