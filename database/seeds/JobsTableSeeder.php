<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Job;
use App\JobStatus;
use App\Truck;
use App\TimeFrame;
use App\JobUser;


class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Trucks*/
        Truck::create(['name' => 'Savana 1']);
        Truck::create(['name' => 'Savana 2']);
        Truck::create(['name' => 'Savana 3']);
        Truck::create(['name' => '3 TON']);
        Truck::create(['name' => '5 TON']);
        /*TimeFrames*/
        TimeFrame::create(['name' => 'AM']);
        TimeFrame::create(['name' => 'PM']);
        /*JobStatuses*/
        JobStatus::create(['name' => 'Booked']);
        JobStatus::create(['name' => 'Finished']);
        JobStatus::create(['name' => 'Confirmed']);
        JobStatus::create(['name' => 'In Progress']);
        JobStatus::create(['name' => 'Cancelled']);
        /*Jobs*/
        for ($i=1; $i < 16; $i++) {
        $job = Job::create([
          'amountOfMovers' => 2,
          'bookingdate' => '2020-07-' . rand(11,30) . ' 9:00:00',
          'truck_id' => rand(1,5),
          'time_frame_id' => rand(1,2),
          'job_status_id' => rand(1,5),
          'estimatedTime' => rand(1,6),
          'start' => rand(9,17) . ':' . rand(0,59),
          'end' => rand(11,18) . ':' . rand(0,59),
        ]);
        /*JobsUsers*/
        $job->users()->sync([rand(1,6),rand(1,6),rand(7,13)]);
        // JobUser::create([
        //   'user_id' => rand(1,7),
        //   'job_id' => $i
        // ]);
        }

    }
}
