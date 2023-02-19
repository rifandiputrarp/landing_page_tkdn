<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = \Illuminate\Http\UploadedFile::fake()->create('file.pdf')->size(1024)->store('post-files');
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('12345678'), // password
            // 'email_verified_at' => now(),
            // 'role' => 'company',
            // 'remember_token' => Str::random(10),
            'user_id' => mt_rand(1, 10),
            'business_capital' => 'Usaha Kecil(> 1 Miliar - 5 Miliar)',
            'npwp' => $this->faker->numberBetween(100000000000000, 999999999999999),
            'person_in_charge' => $this->faker->name(),
            'phone_in_charge' => $this->faker->phoneNumber,
            'npwp_file_path' => $file,
            'iui_file_path' => $file,
            'note' => $this->faker->sentence,
            'status' => 'new',
        ];
    }
}
