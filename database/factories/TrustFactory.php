<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trust>
 */
class TrustFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'site_id' => $this->faker->name(),
            'trust_name' => $this->faker->unique()->name(),
            'site_name' => $this->faker->unique()->name(),
            'country' => $this->faker->name(),
            'state' => $this->faker->unique()->name(),
            'city' => $this->faker->unique()->name(),
            'start_date' => $this->faker->name(),
            'end_date' => $this->faker->name(),
            'added_date' => $this->faker->name(),
            'entity' => $this->faker->name(),
            'location_info' => $this->faker->name(),
            'address' => $this->faker->name(),
            'occupation' => $this->faker->name(),
            'doc_req' => $this->faker->name(),
            'change_since_last_month' => $this->faker->name(),
            'employer' => $this->faker->name(),
            'remark' => $this->faker->name(),
        ];
    }
}
