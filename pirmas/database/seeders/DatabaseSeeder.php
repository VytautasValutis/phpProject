<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);
        $faker = Faker::create();
        foreach(range(1, 20) as $_) {
            DB::table('clients')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'tt' => rand(0, 1),
            ]);
        }
        $p = ['Bata', 'Pica', 'Antis', 'Dramblys', 'Kastuvas', 'Ananasas', 'Puodas', 'ledai', 'bananai', 'kojines', 'plaktukas', 'keptuve'];
        $faker = Faker::create();
        foreach(range(1, 100) as $_) {
            DB::table('orders')->insert([
                'title' => $p[rand(2, count($p) - 1)],
                'price' => rand(10, 1000) / 100,
                'client_id' => rand(1, 20),
            ]);
        }

    }
}
