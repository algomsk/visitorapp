<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker = Faker::create();

            foreach (range(1,500) as $index){
                DB::table('visitor')->insert([
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->email,
                    'dob' => $faker->date,
                    'created_at' => $faker->dateTime(),
                    'updated_at' => $faker->dateTime()
                ]);
            }

            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$2z7j.bI/RohHS6IBXougTOf.ugb/5w3PWvu64mjXlcBQ5jNMlmKcO',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
    }
}
