<?php

namespace Database\Seeders;

use App\Models\Moviegoer;
use App\Models\Moviegoers;
use App\Models\Ticket;
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
        
        for ($i = 1; $i <= 10; $i++) {
            Moviegoer::create([
                'ticket_code' => 'TICKET-' . $i,
                'ticket_id' => $ticket->random()->id,
                'price' => fake()->date('Y-m-d'),
              
            ]);
        }
    }
}
