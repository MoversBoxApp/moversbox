<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Profile;

class UsersController extends Controller
{
    public function __construct()
    {
      // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      $profiles = Profile::all();
      return view('users.index', [
        'users' => $users,
        'profiles' => $profiles
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $profiles = Profile::all();
      return view('users.create', [
        'profiles' => $profiles
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
          'name' => ['required', 'string', 'max:255'],
          // 'profile_id' => ['required'],
          'lastname' => ['required', 'string', 'max:255'],
          'username' => ['required', 'string', 'max:255', 'unique:users'],
          'phone' => ['required', 'string', 'max:255', 'unique:users'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

      ]);
      $user = User::create([
          'name' => $request['name'],
          'profile_id' => $request['profile'],
          'lastname' => $request['lastname'],
          'username' => $request['username'],
          'email' => $request['email'],
          'phone' => $request['phone'],
          'password' => Hash::make('12345678'),
      ]);
      $profile = Profile::where('id', $request['profile'])->first();
      return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
