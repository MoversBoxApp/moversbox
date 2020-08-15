<?php

use Illuminate\Database\Seeder;
use App\LocationType;
use App\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Location Type*/
        LocationType::create(['name' => 'Pick Up']);
        LocationType::create(['name' => 'Drop Off']);

        /*Location*/
        $addresses = array( '1212 Howe St, Vancouver, BC',
                            '1215 Davie St, Vancouver, BC',
                            '1215 Nelson St, Vancouver, BC',
                            '115 Burrard St, Vancouver, BC',
                            '215 Cambie St, Vancouver, BC',
                            '11215 East 115 St, Surrey, BC',
                            '11216 East 114 St, Surrey, BC',
                            '11217 East 113 St, Surrey, BC',
                            '22218 East 112 St, Surrey, BC',
                            '23215 East 111 St, Surrey, BC',
                            '408 6th St, New Westminster, BC',
                            '509 8th St, New Westminster, BC',
                            '408 4th St, New Westminster, BC',
                            '24 Royal Av, New Westminster, BC',
                            '1554 Fraser St, Burnaby, BC'
                          );
        $accesses = array(  'Front door entrance',
                            'Back door through back alley',
                            '1 flight of stairs',
                            '2 flights of stairs',
                            'Elevator Booked'
                          );
        $parkings = array(  'Front parking',
                            'Back alley',
                            'Side alley',
                            'Underground Loading Bay',
                            'Loading bay'
                          );

        for ($i=1; $i < 15; $i++) {
                Location::create([
                  'address' => $addresses[$i-1],
                  'location_types_id' => 1,
                  'job_id' => $i,
                  'access' => $accesses[rand(0,4)],
                  'parking' => $parkings[rand(0,4)],
                  'unit' => rand(100,315)
                                ]);
                Location::create([
                  'address' => $addresses[15-$i],
                  'location_types_id' => 2,
                  'job_id' => $i,
                  'access' => $accesses[rand(0,4)],
                  'parking' => $parkings[rand(0,4)],
                  'unit' => rand(100,315)
                                ]);

        }

    }
}
