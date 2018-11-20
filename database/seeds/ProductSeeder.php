<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  
    public function run()
    {
        DB::table("products")->insert([
        'name' => 'remouladesaus',
        'description' => 'de saus bestaat uit mayonaise, mosterd, fijngesneden augurk, kappertjes, diverse tuinkruiden zoals peterselie, dragon, bieslook en word afgemaakt met fijngewreven ansjovis.',
        'price' => '1.09'
        ]);
    }
}
