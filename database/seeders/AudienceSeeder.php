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
        $audience = Audience::all();
        
        for ($i = 1; $i <= 10; $i++) {
            Audience::create([
                'ticket' => 'TICKET-' . $i,
                'ticket_id' => $audience->random()->id,
                'price' => fake()->date('Y-m-d'),
              
            ]);
        }
    }
}
