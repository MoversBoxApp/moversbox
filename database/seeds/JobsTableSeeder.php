<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Job;
use App\JobStatus;
use App\Truck;
use App\TimeFrame;
use App\JobUser;
use App\Contact;


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
        $names = array('Naomi', 'Julia', 'Java', 'Elizabeth', 'Dave', 'Nicholas', 'Jessica', 'Matt', 'Clark', 'Bruce', 'Harry', 'Luke', 'Frodo', 'Gandalf', 'Sam');
        $lastnames = array('Watson', 'Roberta', 'Script', 'Gilbert', 'Mazzucelli', 'Miller', 'Jones', 'Murdock', 'Kent', 'Wayne', 'Potter', 'Skywalker', 'Baggins', 'The Gray', 'Gamgee');
        for ($i=0; $i < 15; $i++) {
        $job = Job::create([
          'amountOfMovers' => 2,
          'bookingdate' => '2020-07-' . rand(11,30) . ' 9:00:00',
          'truck_id' => rand(1,5),
          'time_frame_id' => rand(1,2),
          'job_status_id' => rand(1,5),
          'estimatedTime' => rand(1,6),
          'company' => $lastnames[$i] . ' Corp.',
          'start' => rand(9,17) . ':' . rand(0,59),
          'end' => rand(11,18) . ':' . rand(0,59),
        ]);
        /*Contacts*/
        Contact::create([
          'name' => $names[14-$i],
          'lastname' => $lastnames[$i],
          'phone' => '604-000-000'.$i,
          'job_id' => $i+1
        ]);
        Contact::create([
          'name' => $names[$i],
          'lastname' => $lastnames[$i],
          'phone' => '604-000-001'.$i,
          'job_id' => $i+1
        ]);
        /*JobsUsers*/
        $job->users()->sync([rand(1,6),rand(1,6),rand(7,13)]);

      }
    }
}
