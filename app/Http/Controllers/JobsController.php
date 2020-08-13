<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;
use App\Room;
use App\Item;
use App\Cargo;
use App\Truck;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobs = Job::all();
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
      return view('moves.index',[
      // return view('admin.test',[
        'jobs' => $jobs,
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
      // $request->validate([
      //     'firstname' => ['required', 'string', 'max:255'],
      //     'lastname' => ['required', 'string', 'max:255'],
      //     'username' => ['required', 'string', 'max:255'],
      //     'client-phone' => ['required', 'string', 'max:255'],
      //     'client-email' => ['required', 'string', 'email', 'max:255'],
      //     'bookingdate' => ['required', 'string', 'date','max:255'],
      // ]);
      $cargo = json_decode($request['cargo'],true);
      // print_r($cargo);
      foreach ($cargo as $key => $value) {
    echo "<br>" . $value["name"] . ", " . $value["room_id"];
  };
      // echo $cargo[0]["name"];
        // dd($request);
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
    public function edit($id)
    {
        //
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
