<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\City;
use Illuminate\Support\Str;

class ParseCities extends Command
{
    protected $signature = 'parse:cities';
    protected $description = 'Parse cities from API and save to database';

    public function handle()
    {
        $response = Http::get('https://api.hh.ru/areas');
        $areas = $response->json();
        $russia = collect($areas)->firstWhere('name', 'Россия');

        foreach ($russia['areas'] as $region) {
            foreach ($region['areas'] as $city) {
                City::updateOrCreate(
                    ['slug' => Str::slug($city['name'])],
                    ['name' => $city['name']]
                );
            }
        }

        $this->info('Cities parsed and saved successfully.');
    }
}
