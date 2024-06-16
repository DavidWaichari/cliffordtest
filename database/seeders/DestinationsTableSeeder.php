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
                'name' => 'Eiffel Tower',
                'description' => 'Famous landmark in Paris',
                'landmark' => 'Eiffel Tower',
                'status' => 'Active',
            ],
            [
                'name' => 'Statue of Liberty',
                'description' => 'Iconic statue in New York',
                'landmark' => 'Statue of Liberty',
                'status' => 'Active',
            ],
            [
                'name' => 'Great Wall of China',
                'description' => 'Ancient wall in China',
                'landmark' => 'Great Wall',
                'status' => 'Active',
            ],
            [
                'name' => 'Sydney Opera House',
                'description' => 'Famous opera house in Sydney',
                'landmark' => 'Opera House',
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
