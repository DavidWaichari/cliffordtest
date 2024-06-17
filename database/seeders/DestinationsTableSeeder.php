<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinations = [
            [
                'name' => 'Maasai Mara',
                'description' => 'Famous for the Great Migration',
                'landmark' => 'Maasai Mara National Reserve',
                'status' => 'Active',
            ],
            [
                'name' => 'Mount Kenya',
                'description' => 'Highest mountain in Kenya',
                'landmark' => 'Mount Kenya',
                'status' => 'Active',
            ],
            [
                'name' => 'Diani Beach',
                'description' => 'Popular beach destination on the Indian Ocean coast',
                'landmark' => 'Diani Beach',
                'status' => 'Active',
            ],
            [
                'name' => 'Lamu Old Town',
                'description' => 'UNESCO World Heritage site with historic Swahili architecture',
                'landmark' => 'Lamu Old Town',
                'status' => 'Active',
            ],
        ];

        foreach ($destinations as $destinationData) {
            // Check if the destination already exists
            $existingDestination = Destination::where('name', $destinationData['name'])->first();

            if (!$existingDestination) {
                // Destination does not exist, so create it
                Destination::create($destinationData);
            }
        }
    }
}
