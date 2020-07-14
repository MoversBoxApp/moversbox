<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
use App\UserStatus;
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

      $enabledUserStatus = UserStatus::where('name','Enabled')->first();
      $disabledUserStatus = UserStatus::where('name','Disabled')->first();

      $admin = User::create([
        'name' => 'Ragnar',
        'lastname' => 'Lothbrok',
        'username' => 'ragnar',
        'email' => 'ragnar@mail.com',
        'phone' => '601',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $salesmanager = User::create([
        'name' => 'John',
        'lastname' => 'Doe',
        'username' => 'JohnDoe',
        'phone' => '602',
        'email' => 'john@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $salesagent = User::create([
        'name' => 'Rodney',
        'lastname' => 'Macneal',
        'username' => 'RodneyMacneal',
        'phone' => '603',
        'email' => 'rodney@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $owneroperator = User::create([
        'name' => 'Meghan',
        'lastname' => 'Abo',
        'username' => 'MeghanAbo',
        'phone' => '604',
        'email' => 'meghan@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $affiliate = User::create([
        'name' => 'Kristie',
        'lastname' => 'Aamdot',
        'username' => 'KristieAamdot',
        'phone' => '605',
        'email' => 'kristie@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $mover = User::create([
        'name' => 'Neil',
        'lastname' => 'Aaron',
        'username' => 'NeilAaron',
        'phone' => '606',
        'email' => 'neil@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $client = User::create([
        'name' => 'Naomi',
        'lastname' => 'Wattson',
        'username' => 'NaomiWattson',
        'phone' => '607',
        'email' => 'naomi@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $adminProfile = $adminProfile->users()->save($admin);
      $salesmanagerProfile = $salesmanagerProfile->users()->save($salesmanager);
      $salesagentProfile = $salesagentProfile->users()->save($salesagent);
      $owneroperatorProfile = $owneroperatorProfile->users()->save($owneroperator);
      $affiliateProfile = $affiliateProfile->users()->save($affiliate);
      $moverProfile = $moverProfile->users()->save($mover);
      $clientProfile = $clientProfile->users()->save($client);

      $enabledUserStatus = $enabledUserStatus->users()->save($admin);
      // $enabledUserStatus = $enabledUserStatus->users()->save($salesmanager);
      // $enabledUserStatus = $enabledUserStatus->users()->save($salesagent);
      // $enabledUserStatus = $enabledUserStatus->users()->save($owneroperator);
      // $disabledUserStatus = $disabledUserStatus->users()->save($affiliate);
      // $enabledUserStatus = $enabledUserStatus->users()->save($mover);
      // $disabledUserStatus = $disabledUserStatus->users()->save($client);

    }
}
