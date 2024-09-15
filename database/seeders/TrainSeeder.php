<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 99; $i ++){
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->dateTimeInInterval('now', '+1 week');
            $train->arrival_date = $faker->dateTimeInInterval('now', '+1 week');
            $train->price = $faker->randomFloat(1, 20, 80);
            $train->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->carriages_number = $faker->randomDigitNotNull();
            $train->is_on_time = $faker->boolean();
            $train->is_canceled = $faker->boolean();
            $train->save();
        }

    }
}
