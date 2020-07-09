<?php

use Illuminate\Database\Seeder;
use App\Profile;
use App\User;

class ProfilesTableSeeder extends Seeder
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
      Profile::create(['name' => 'Administrator']);
      Profile::create(['name' => 'Sales Manager']);
      Profile::create(['name' => 'Sales Agent']);
      Profile::create(['name' => 'Owner Operator']);
      Profile::create(['name' => 'Affiliate']);
      Profile::create(['name' => 'Mover']);
      Profile::create(['name' => 'Client']);
    }
}
