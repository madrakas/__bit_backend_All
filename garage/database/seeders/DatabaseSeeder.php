<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('lt_LT');
        foreach(range(1, 20) as $i){
            DB::table('mechanics')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
            ]);
        }

        $trucksModels = [
            'Volvo',
            'Man',
            'Scania',
            'Mercedes',
            'Iveco',
            'Renault',
            'DAF',
            'Mitsubishi'
        ];
        
        foreach(range(1, 100) as $i){

            DB::table('trucks')->insert([
                'brand' => $faker->randomElement($trucksModels),
                'plate' => $faker->regexify('[A-Z]{3}-[0-9]{3}'),
                'mechanic_id' => $faker->numberBetween(1, 20),
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);

        foreach(range(1, 66) as $i){
            $companyName = $faker->company;
            $companyNameParts = explode(' ', $companyName);
            $companyNameWithoutFirstWord = implode(' ', array_slice($companyNameParts, 1));

            DB::table('companies')->insert([
                'name' => $companyNameWithoutFirstWord,
                'type' => $faker->randomElement(['UAB', 'AB', 'IĮ', 'VšĮ']),
            ]);
        }
    }
}

// To run sedder, in terminal run: php artisan migrate:fresh --seed
