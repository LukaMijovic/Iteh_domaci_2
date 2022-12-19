<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Player::truncate();

        // $player = Player::factory()->create();

        // $p1 = Player::create([
        //     "firstname" => "Mohamed",
        //     "lastname" => "Salah",
        //     "shirtNumber" => 11,
        //     "age" => 29,
        //     "nationality" => "Egipcanin",
        //     "league" => "Premijer liga"
        // ]);
        // $p2 = Player::create([
        //     "firstname" => "Timo",
        //     "lastname" => "Werner",
        //     "shirtNumber" => 11,
        //     "age" => 24,
        //     "nationality" => "Nemac",
        //     "league" => "Bundes liga"
        // ]);
        // $p3 = Player::create([
        //     "firstname" => "Dusan",
        //     "lastname" => "Vlahovic",
        //     "shirtNumber" => 9,
        //     "age" => 22,
        //     "nationality" => "Srbin",
        //     "league" => "Seria a"
        // ]);

        for ($i = random_int(1,5); $i < 5; $i++){
            DB::table('players')->insert([
                'firstname' => Str::random(10),
                'lastname' => Str::random(10),
                'shirtNumber' => random_int(1, 99),
                'age' => random_int(18, 35),
                'league'=> Str::random(10),
            ]);
        }
    }
}
