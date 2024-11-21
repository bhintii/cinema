<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TicketSeeder;
use Database\Seeders\moviegoersSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            TicketSeeder::class,
            moviegoersSeeder::class,
        ]);
    }
}
