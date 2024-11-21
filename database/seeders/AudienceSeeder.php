<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Ticket;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Attributes\Ticket as AttributesTicket;

class AudienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets = Ticket::all();
        $categorys = ['Boy', 'Girl', 'Children', 'GrandPa', 'GrandMa'];
        for ($i = 1; $i <= 10; $i++) {
            Audience::create([
                'ticket' => 'TICKET-' . $i,
                'ticket_id' => $tickets->random()->id,
                'birthdate' => fake()->date('Y-m-d'),
                'category' => fake()->randomElement(['adult', 'child', 'student']),
            ]);
        }
    }
}
