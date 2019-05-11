<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('RU_ru');
        for ($i = 0; $i <= 100; $i++){
            $contact = new \App\Contact([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->freeEmail,
                'phone' => $faker->e164PhoneNumber,
                'address' => $faker->address,
            ]);
            //var_dump($contact);
            $contact->save();
        }
    }
}
