<?php

use Illuminate\Database\Seeder;
use App\UserStatus;

class UserStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
       // DB::table('users')->truncate();
       // DB::table('profiles')->truncate();
       // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       UserStatus::create(['name' => 'Enabled']);
       UserStatus::create(['name' => 'Disabled']);
     }
}
