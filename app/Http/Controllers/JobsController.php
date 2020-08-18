<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Room;
use App\Item;
use App\Cargo;
use App\Truck;
use App\Contact;
use App\Location;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobs = Job::all()->sortBy('bookingdate')->sortBy('job_status_id');
      $rooms = Room::all();
      $items = Item::all();
      // $livingroomitems = DB::table('items')->where('room_id', 1)->get();
      // $diningroomitems = DB::table('items')->where('room_id', 2)->get();
      // $bedroomitems = DB::table('items')->where('room_id', 3)->get();
      // $kitchenitems = DB::table('items')->where('room_id', 4)->get();
      // $nurseryitems = DB::table('items')->where('room_id', 5)->get();
      // $officeitems = DB::table('items')->where('room_id', 6)->get();
      // $garageitems = DB::table('items')->where('room_id', 7)->get();
      // $outdooritems = DB::table('items')->where('room_id', 8)->get();
      // $appliancesitems = DB::table('items')->where('room_id', 9)->get();
      // $boxesitems = DB::table('items')->where('room_id', 10)->get();
      // $othersitems = DB::table('items')->where('room_id', 11)->get();
      // $storageitems = DB::table('items')->where('room_id', 12)->get();
      $cargos = Cargo::all();
      return view('moves.index',[
      // return view('admin.test',[
        'jobs' => $jobs,
        'rooms' => $rooms,
        'items' => $items,
        'cargos' => $cargos,
        // 'livingroomitems' => $livingroomitems,
        // 'diningroomitems' => $diningroomitems,
        // 'bedroomitems' => $bedroomitems,
        // 'kitchenitems' => $kitchenitems,
        // 'nurseryitems' => $nurseryitems,
        // 'officeitems' => $officeitems,
        // 'garageitems' => $garageitems,
        // 'outdooritems' => $outdooritems,
        // 'appliancesitems' => $appliancesitems,
        // 'boxesitems' => $boxesitems,
        // 'othersitems' => $othersitems,
        // 'storageitems' => $storageitems,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $trucks = Truck::all();
      $rooms = Room::all();
      $items = Item::all();
      $livingroomitems = DB::table('items')->where('room_id', 1)->get();
      $diningroomitems = DB::table('items')->where('room_id', 2)->get();
      $bedroomitems = DB::table('items')->where('room_id', 3)->get();
      $kitchenitems = DB::table('items')->where('room_id', 4)->get();
      $nurseryitems = DB::table('items')->where('room_id', 5)->get();
      $officeitems = DB::table('items')->where('room_id', 6)->get();
      $garageitems = DB::table('items')->where('room_id', 7)->get();
      $outdooritems = DB::table('items')->where('room_id', 8)->get();
      $appliancesitems = DB::table('items')->where('room_id', 9)->get();
      $boxesitems = DB::table('items')->where('room_id', 10)->get();
      $othersitems = DB::table('items')->where('room_id', 11)->get();
      $storageitems = DB::table('items')->where('room_id', 12)->get();
      $cargos = Cargo::all();
        return view('moves.create',[
          'trucks' => $trucks,
          'rooms' => $rooms,
          'items' => $items,
          'cargos' => $cargos,
          'livingroomitems' => $livingroomitems,
          'diningroomitems' => $diningroomitems,
          'bedroomitems' => $bedroomitems,
          'kitchenitems' => $kitchenitems,
          'nurseryitems' => $nurseryitems,
          'officeitems' => $officeitems,
          'garageitems' => $garageitems,
          'outdooritems' => $outdooritems,
          'appliancesitems' => $appliancesitems,
          'boxesitems' => $boxesitems,
          'othersitems' => $othersitems,
          'storageitems' => $storageitems,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'firstname.*' => ['required', 'max:255'],
          'lastname.*' => ['required', 'max:25'],
          'client-phone.*' => ['required', 'max:10'],
          'client-email' => ['required', 'string', 'email', 'max:255'],
          'bookingdate' => ['required', 'string', 'date','max:255'],
          'pickup-address.0' => ['required','max:255'],
          'dropoff-address.0' => ['required','max:255'],
          'estimated-time' => ['required', 'numeric', 'gt:0', 'max:25'],
      ]);

        $job = Job::create([
          'amountOfMovers' => $request['movers'],
          'bookingdate' => $request['bookingdate'],
          'truck_id' => $request['truck'],
          'time_frame_id' => '1', //To be added!
          'job_status_id' => '1',
          'estimatedTime' => $request['estimated-time'],
          'company' => $request['company'],
        ]);
      /*Contacts*/
        for ($i=0; $i < sizeof($request['firstname']); $i++) {
        Contact::create([
          'name' => $request['firstname'][$i],
          'lastname' => $request['lastname'][$i],
          'phone' => $request['client-phone'][$i],
          'job_id' => $job->id,
        ]);
        }
        /*JobsUsers (Must add the Client[first contact] and the actual user-sales agent[auth])*/
        $job->users()->sync($request['client_id'],[rand(1,6)]);
        // Locations
        $pu_addresses = $request['pickup-address'];
        $pu_accesses = $request['pickup-access'];
        $pu_parkings = $request['pickup-parking'];
        $pu_units = $request['pickup-unit'];
        $do_addresses = $request['dropoff-address'];
        $do_accesses = $request['dropoff-access'];
        $do_parkings = $request['dropoff-parking'];
        $do_units = $request['dropoff-unit'];
        for ($j=0; $j < sizeof($pu_addresses); $j++) {
          if ($pu_addresses[$j]) {
            Location::create([
              'address' => $pu_addresses[$j],
              'location_types_id' => 1,
              'job_id' => $job->id,
              'access' => $pu_accesses[$j],
              'parking' => $pu_parkings[$j],
              'unit' => $pu_units[$j]
                            ]);
          }
          if ($do_addresses[$j]) {
            Location::create([
              'address' => $do_addresses[$j],
              'location_types_id' => 2,
              'job_id' => $job->id,
              'access' => $do_accesses[$j],
              'parking' => $do_parkings[$j],
              'unit' => $do_units[$j]
                            ]);
          }
        }

        // Cargo
      $cargo = json_decode($request['cargo'],true);
      $height = $request['height'];
      $width = $request['width'];
      $weight = $request['weight'];
      $depth = $request['depth'];
      $cufeet = $request['cuft'];
      $quantity = $request['quantity'];

      foreach ($cargo as $k => $item) {
    // echo "<br>" . $item["name"] . ", " . $value["room_id"];
        Cargo::create([
          'item_id' => $item["id"],
          'job_id' => $job->id,
          'height' => $height[$k],
          'width' => $width[$k],
          'weight' => $weight[$k],
          'depth' => $depth[$k],
          // 'cufeet' => $cufeet[$k],
          'quantity' => $quantity[$k]
        ]);
    };
      // echo $cargo[0]["name"];
        // dd($request);
        return redirect('/moves')->with('message', 'New job successfully booked.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
      $job = Job::find($id);
      // echo $job->contacts()->first()->name;
      $trucks = Truck::all();
      $rooms = Room::all();
      $items = Item::all();
      $livingroomitems = DB::table('items')->where('room_id', 1)->get();
      $diningroomitems = DB::table('items')->where('room_id', 2)->get();
      $bedroomitems = DB::table('items')->where('room_id', 3)->get();
      $kitchenitems = DB::table('items')->where('room_id', 4)->get();
      $nurseryitems = DB::table('items')->where('room_id', 5)->get();
      $officeitems = DB::table('items')->where('room_id', 6)->get();
      $garageitems = DB::table('items')->where('room_id', 7)->get();
      $outdooritems = DB::table('items')->where('room_id', 8)->get();
      $appliancesitems = DB::table('items')->where('room_id', 9)->get();
      $boxesitems = DB::table('items')->where('room_id', 10)->get();
      $othersitems = DB::table('items')->where('room_id', 11)->get();
      $storageitems = DB::table('items')->where('room_id', 12)->get();
      $cargos = Cargo::all();
      return view('moves.edit', [
        'job' => $job,
        'trucks' => $trucks,
        'rooms' => $rooms,
        'items' => $items,
        'cargos' => $cargos,
        'livingroomitems' => $livingroomitems,
        'diningroomitems' => $diningroomitems,
        'bedroomitems' => $bedroomitems,
        'kitchenitems' => $kitchenitems,
        'nurseryitems' => $nurseryitems,
        'officeitems' => $officeitems,
        'garageitems' => $garageitems,
        'outdooritems' => $outdooritems,
        'appliancesitems' => $appliancesitems,
        'boxesitems' => $boxesitems,
        'othersitems' => $othersitems,
        'storageitems' => $storageitems,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
