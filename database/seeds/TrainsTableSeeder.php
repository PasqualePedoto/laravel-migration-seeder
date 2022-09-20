<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){

            $new_train = new Train();
            
            $new_train->agency = $faker->word();
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->randomNumber(5, true);
            $new_train->carrieges_number = $faker->randomDigit();
            $new_train->in_time = $faker->boolean();
            $new_train->is_delete = $faker->boolean();
            
            $new_train->save();
        }
    }
}
