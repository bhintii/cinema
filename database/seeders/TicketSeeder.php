<?php

namespace Database\Seeders;

use App\Models\ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    public function run()
    {
        ticket::create(['ticket_code' => 'TICKET-1', 'price' => '1000']);
        ticket::create(['ticket_code' => 'TICKET-2', 'price' => '2000']);
        ticket::create(['ticket_code' => 'TICKET-3', 'price' => '3000']);
        ticket::create(['ticket_code' => 'TICKET-4', 'price' => '4000']);
        ticket::create(['ticket_code' => 'TICKET-5', 'price' => '5000']);
    }
}
