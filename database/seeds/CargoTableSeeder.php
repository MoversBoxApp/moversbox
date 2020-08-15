<?php

use Illuminate\Database\Seeder;
use App\Room;
use App\Item;
use App\Cargo;
use App\Job;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*Rooms*/
      Room::create([
        'name' => 'Living Room',
        'btncolor' => 'secondary'
    ]);
      Room::create([
        'name' => 'Dining Room',
        'btncolor' => 'success'
    ]);
      Room::create([
        'name' => 'Bedroom',
        'btncolor' => 'danger'
    ]);
      Room::create([
        'name' => 'Kitchen',
        'btncolor' => 'secondary'
    ]);
      Room::create([
        'name' => 'Nursery',
        'btncolor' => 'primary'
    ]);
      Room::create([
        'name' => 'Office',
        'btncolor' => 'info'
    ]);
      Room::create([
        'name' => 'Garage',
        'btncolor' => 'success'
    ]);
      Room::create([
        'name' => 'Outdoor',
        'btncolor' => 'warning'
    ]);
      Room::create([
        'name' => 'Appliances',
        'btncolor' => 'warning'
    ]);
      Room::create([
        'name' => 'Boxes',
        'btncolor' => 'secondary'
    ]);
      Room::create([
        'name' => 'Others',
        'btncolor' => 'danger'
    ]);
      Room::create([
        'name' => 'Storage',
        'btncolor' => 'primary'
    ]);
      /*Items*/
      $itemsLR = array(
        'One Seater Sofa',
        'Two Seater Sofa',
        'Coffee Table',
        'Large TV',
        'Small Bench',
        'Medium Bench',
        'Large Bench',
        'Armchair',
        'Sofa Bed'
      );
      $itemsDR = array(
        'Bench, Harvest',
        'Buffet',
        'Cabinet China',
        'Cabinet Corner',
        'Chair Dining',
        'Rug, Large','Rug, Small','Server','Table, Dining','Tea Cart'
      );
      $itemsBR = array(
        'Bench','Dresser','Shelf','Bunk Bed','Cedar Chest','Chair,Budoir',
        'Chair, Stright','Chaise Lounge','Desk','Dresser, Dbl.', 'Exercise Bike'
      );
      $itemsKi = array(
        'Baker Rack','Breakfast Suite','Breakfast Table','Butcher Block',
        'Chair, High','Ironing Board','Kitchen Cabinet','Microwave',
        'Serving Cart','Stool','Table',
        'Utility Cabinet'
      );
      $itemsNu = array(
        'Crib',
        'Crib Mattress',
        'Nursing Chair',
        'Dressers',
        'Lamp'
      );
      $itemsOf = array(
        'Desk',
        'Office Chair',
        'File Cabinet',
        'Bookshelf',
        'Portabel Air Conditioner'
      );
      $itemsGa = array(
        'Golf Bag',
        'Chest',
        'Plastic Bin',
        'Bike',
        'Toolbox'
      );
      $itemsOu = array(
        'Patio Table',
        'Patio Chair',
        'Patio Umbrella',
        'BBQ',
        'Composting Bin '
      );
      $itemsAp = array(
        'Microwave',
        'Electric Oven',
        'Fridge',
        'Freezer',
        'Heater'
      );
      $itemsBx = array(
        'Small Box',
        'Medium Box',
        'Large Box',
        'Office Box',
        'Wardrobe'
      );
      $itemsOt = array(
        'Others 1',
        'Others 2',
        'Others 3',
        'Others 4',
        'Others 5'
      );
      $itemsSt = array(
        'Small Tote',
        'Medium Tote',
        'Large Tote',
        'XL Tote',
        'Flat Tote',
      );
      for ($i=0; $i < 5; $i++)
      {
        /*Items Living Room*/
        Item::create([
          'name' => $itemsLR[$i],
          'room_id' => 1,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Dining Room*/
        Item::create([
          'name' => $itemsDR[$i],
          'room_id' => 2,
          'cufeet' => rand(5, 150)
        ]);
        /*Items BedRoom*/
        Item::create([
          'name' => $itemsBR[$i],
          'room_id' => 3,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Kitchen*/
        Item::create([
          'name' => $itemsKi[$i],
          'room_id' => 4,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Nursery*/
        Item::create([
          'name' => $itemsNu[$i],
          'room_id' => 5,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Office*/
        Item::create([
          'name' => $itemsOf[$i],
          'room_id' => 6,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Garage*/
        Item::create([
          'name' => $itemsGa[$i],
          'room_id' => 7,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Outdoor*/
        Item::create([
          'name' => $itemsOu[$i],
          'room_id' => 8,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Appliances*/
        Item::create([
          'name' => $itemsAp[$i],
          'room_id' => 9,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Boxes*/
        Item::create([
          'name' => $itemsBx[$i],
          'room_id' => 10,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Others*/
        Item::create([
          'name' => $itemsOt[$i],
          'room_id' => 11,
          'cufeet' => rand(5, 150)
        ]);
        /*Items Storage*/
        Item::create([
          'name' => $itemsSt[$i],
          'room_id' => 12,
          'cufeet' => rand(5, 150)
        ]);
      }

      /*End Items*/
      /*Cargo*/
      for ($k=1; $k < 16; $k++) {
      for ($j=1; $j < 16; $j++) {
        Cargo::create([
          'item_id' => rand(1,60),
          'job_id' => $k,
          'height' => rand(5, 150),
          'width' => rand(5, 150),
          'weight' => rand(5, 150),
          'depth' => rand(5, 150),
          'quantity' => rand(1, 5)
        ]);
      }
      }

    }
}
