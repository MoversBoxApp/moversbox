<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // User::truncate();

      $adminProfile = Profile::where('name', 'Administrator')->first();
      $salesmanagerProfile = Profile::where('name', 'Sales Manager')->first();
      $salesagentProfile = Profile::where('name', 'Sales Agent')->first();
      $owneroperatorProfile = Profile::where('name', 'Owner Operator')->first();
      $affiliateProfile = Profile::where('name', 'Affiliate')->first();
      $moverProfile = Profile::where('name', 'Mover')->first();
      $clientProfile = Profile::where('name', 'Client')->first();

      $admin = User::create([
        'name' => 'Ragnar',
        'lastname' => 'Lothbrok',
        'username' => 'ragnar',
        'email' => 'ragnar@mail.com',
        'phone' => '601',
        'password' => Hash::make('12345678')
      ]);
      $salesmanager = User::create([
        'name' => 'John',
        'lastname' => 'Doe',
        'username' => 'JohnDoe',
        'phone' => '602',
        'email' => 'john@mail.com',
        'password' => Hash::make('12345678')
      ]);
      $salesagent = User::create([
        'name' => 'Rodney',
        'lastname' => 'Macneal',
        'username' => 'RodneyMacneal',
        'phone' => '603',
        'email' => 'rodney@mail.com',
        'password' => Hash::make('12345678')
      ]);
      $owneroperator = User::create([
        'name' => 'Meghan',
        'lastname' => 'Abo',
        'username' => 'MeghanAbo',
        'phone' => '604',
        'email' => 'meghan@mail.com',
        'password' => Hash::make('12345678')
      ]);
      $affiliate = User::create([
        'name' => 'Kristie',
        'lastname' => 'Aamdot',
        'username' => 'KristieAamdot',
        'phone' => '605',
        'email' => 'kristie@mail.com',
        'password' => Hash::make('12345678')
      ]);
      $mover = User::create([
        'name' => 'Neil',
        'lastname' => 'Aaron',
        'username' => 'NeilAaron',
        'phone' => '606',
        'email' => 'neil@mail.com',
        'password' => Hash::make('12345678')
      ]);
      $client = User::create([
        'name' => 'Naomi',
        'lastname' => 'Wattson',
        'username' => 'NaomiWattson',
        'phone' => '607',
        'email' => 'naomi@mail.com',
        'password' => Hash::make('12345678')
      ]);
      $adminProfile = $adminProfile->users()->save($admin);
      $salesmanagerProfile = $salesmanagerProfile->users()->save($salesmanager);
      $salesagentProfile = $salesagentProfile->users()->save($salesagent);
      $owneroperatorProfile = $owneroperatorProfile->users()->save($owneroperator);
      $affiliateProfile = $affiliateProfile->users()->save($affiliate);
      $moverProfile = $moverProfile->users()->save($mover);
      $clientProfile = $clientProfile->users()->save($client);

    }
}
