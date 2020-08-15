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
      Profile::create(['name' => 'Administrator']);
      Profile::create(['name' => 'Sales Manager']);
      Profile::create(['name' => 'Sales Agent']);
      Profile::create(['name' => 'Owner Operator']);
      Profile::create(['name' => 'Affiliate']);
      Profile::create(['name' => 'Mover']);
      Profile::create(['name' => 'Client']);
      UserStatus::create(['name' => 'Enabled']);
      UserStatus::create(['name' => 'Disabled']);

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
        'phone' => '6010000000',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $salesmanager = User::create([
        'name' => 'John',
        'lastname' => 'Doe',
        'username' => 'JohnDoe',
        'phone' => '6020000000',
        'email' => 'john@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $salesagent = User::create([
        'name' => 'Rodney',
        'lastname' => 'Macneal',
        'username' => 'RodneyMacneal',
        'phone' => '6030000000',
        'email' => 'rodney@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $owneroperator = User::create([
        'name' => 'Meghan',
        'lastname' => 'Abo',
        'username' => 'MeghanAbo',
        'phone' => '6070000000',
        'email' => 'meghan@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $affiliate = User::create([
        'name' => 'Kristie',
        'lastname' => 'Aamdot',
        'username' => 'KristieAamdot',
        'phone' => '6050000000',
        'email' => 'kristie@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $mover = User::create([
        'name' => 'Neil',
        'lastname' => 'Aaron',
        'username' => 'NeilAaron',
        'phone' => '6060000000',
        'email' => 'neil@mail.com',
        'password' => Hash::make('12345678'),
        'userpic' => 'uploads/profile.svg'
      ]);
      $names = array('Naomi', 'Julia', 'Java', 'Elizabeth', 'Dave', 'Nicholas', 'Jessica');
      $lastnames = array('Watson', 'Roberta', 'Script', 'Gilbert', 'Mazzucelli', 'Miller', 'Jones');
      for ($i=0; $i < count($names); $i++) {
        $client = User::create([
          'name' => $names[$i],
          'lastname' => $lastnames[$i],
          'username' => $names[$i] . $lastnames[$i],
          'phone' => 6040000000 + $i,
          'email' => $names[$i] . '@mail.com',
          'password' => Hash::make('12345678'),
          'userpic' => 'uploads/profile.svg'
        ]);
        Profile::where('id', 7)->first()->users()->save($client);
      };
      $adminProfile = $adminProfile->users()->save($admin);
      $salesmanagerProfile = $salesmanagerProfile->users()->save($salesmanager);
      $salesagentProfile = $salesagentProfile->users()->save($salesagent);
      $owneroperatorProfile = $owneroperatorProfile->users()->save($owneroperator);
      $affiliateProfile = $affiliateProfile->users()->save($affiliate);
      $moverProfile = $moverProfile->users()->save($mover);

      $enabledUserStatus = $enabledUserStatus->users()->save($admin);

    }
}
