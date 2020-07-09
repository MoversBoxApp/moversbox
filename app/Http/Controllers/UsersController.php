<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      return view('admin.users.index', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = array(
          'name' => ['required', 'string', 'max:255'],
          'profile_id' => ['required'],
          'lastname' => ['required', 'string', 'max:255'],
          'username' => ['required', 'string', 'max:255', 'unique:users'],
          'phone' => ['required', 'string', 'max:255', 'unique:users'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['string', 'min:8', 'confirmed'],
      );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {
            return Redirect::to('/admin-users')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->name       = Input::get('name');
            $user->lastname       = Input::get('lastname');
            $user->username       = Input::get('username');
            $user->phone       = Input::get('phone');
            $user->email      = Input::get('email');
            $user->password = Input::get('password');

            $user->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('nerds');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
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
