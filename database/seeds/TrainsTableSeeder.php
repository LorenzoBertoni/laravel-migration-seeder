<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for ($i=0; $i<50; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->sentence(3);
            $newTrain->departure_station = $faker->sentence();
            $newTrain->arrival_station = $faker->sentence();
            $newTrain->departure_time = $faker->dateTimeBetween('-3 days', '+1 days');
            $newTrain->arrival_time = $faker->dateTimeInInterval($newTrain->departure_time, '+1 day');
            $newTrain->train_code = $faker->ean8();
            $newTrain->n_of_carriages = $faker->randomDigitNotNull();
            $newTrain->isInTime = $faker->boolean();
            $newTrain->isCancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
