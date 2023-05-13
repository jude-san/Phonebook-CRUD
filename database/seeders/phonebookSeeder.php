<?php

namespace Database\Seeders;

use App\Models\Phonebook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class phonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // 
        $faker = \Faker\Factory::create();
        $faker->seed('1234');

        // Create 50 products records
        for ($i = 0; $i < 50; $i++) {
            Phonebook::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'number' => $faker->phoneNumber,
            ]);
        }
    }
}
