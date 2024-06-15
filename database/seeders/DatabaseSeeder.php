<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $continents = [
            ['id'=>1, 'name'=>'Africa',],
            ['id'=>2, 'name'=>'Asia',],
            ['id'=>3, 'name'=>'North America',],
            ['id'=>4, 'name'=>'South America',],
            ['id'=>5, 'name'=>'Europe',],
            ['id'=>6, 'name'=>'Oceany',],
        ];
        foreach($continents as $continent){
            \App\Models\Continent::factory()->create($continent)->each(function ($c){
                $c->countries->saveMany(Country::factory(count: 10)->make()); 
            });
        }
    }
}
