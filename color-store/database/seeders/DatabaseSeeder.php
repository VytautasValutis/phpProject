<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);
        foreach([
            'Mono color',
            'Stereo palette',
            'Three pastels',
            'Four seasons',
            'Five Stars'
        ] as $count => $title) {
            DB::table('cats')->insert([
                'title' => $title,
                'colors_count' => $count + 1,
            ]);
        }

    }
}
