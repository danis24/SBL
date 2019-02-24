<?php

use Illuminate\Database\Seeder;
use App\Services\Airports\Airport;

class AirtPortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airPortData = storage_path().'/app/public/airport.json';
        $jsonFile = json_decode(file_get_contents($airPortData));
        foreach ($jsonFile as $key => $value) {
            Airport::create([
                'iata' => $value->iata,
                'iso' => $value->iso,
                'status' => $value->status,
                'name' => $value->name,
                'continent' => $value->continent,
                'type' => $value->type,
                'size' => $value->size
            ]);
        }
    }
}
