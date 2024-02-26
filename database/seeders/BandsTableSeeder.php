<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bands')->insert([
            ["name" => "AC/DC", "gender" => "Rock", "year" => 1973],
            ["name" => "Metallica", "gender" => "Rock", "year" => 1981],
            ["name" => "Ramones", "gender" => "Punk", "year" => 1974],
            ["name" => "Queen", "gender" => "Rock", "year" => 1970],
            ["name" => "Guns N Roses", "gender" => "Rock", "year" => 1985],
        ]);
    }
}
