<?php

namespace Database\Seeders;

use App\Models\moviegoers;
use App\Models\ticket;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Attributes\Ticket as AttributesTicket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ticket = Ticket::all();
        $categorys = ['Boy', 'Girl', 'Children', 'GrandPa', 'GrandMa'];
        for ($i = 1; $i <= 10; $i++) {
            moviegoers::create([
                'ticket_code' => 'TICKET-' . $i,
                'ticket_id' => $ticket->random()->id,
                'price' => fake()->date('Y-m-d'),
                'category' => $categorys[array_rand($categorys)],
            ]);
        }
    }
}
