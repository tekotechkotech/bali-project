<?php



namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => fake()->sentence(3),
            'email' => fake()->email(),
            'mobilephone' => fake()->numerify('+62##########'),
            'date_of_birth' => fake()->date(),
            'address' => fake()->address(),
        ];
    }
}
