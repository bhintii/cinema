<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    public function run()
    {
        Ticket::create(['ticket' => 'TICKET-1', 'price' => '10000']);
        Ticket::create(['ticket' => 'TICKET-2', 'price' => '20000']);
        Ticket::create(['ticket' => 'TICKET-3', 'price' => '30000']);
        Ticket::create(['ticket' => 'TICKET-4', 'price' => '40000']);
        Ticket::create(['ticket' => 'TICKET-5', 'price' => '50000']);
    }
}
