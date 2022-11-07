<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $trainCode = 'TRENITALIA';
        for($i = 0; $i < 100; $i++){
            $train = new Train();

            $departureArrivalDate = $faker->date();

            $train->company = $faker->name();
            $train->departure_station = $faker->city();
            $train->departure_date = $departureArrivalDate;
            $train->departure_time = $faker->time();
            $train->arrival_station = $faker->city();
            $train->arrival_date = $departureArrivalDate;
            $train->arrival_time = $faker->time();
            $train->train_code = $trainCode . $i;

            $train->save();
        }

    }
}
