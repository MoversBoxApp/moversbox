<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Profile;
use App\UserStatus;
use Illuminate\Validation\Rule;

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
      $profiles = Profile::all();
      $userstatuses = UserStatus::all();
      $users = QueryBuilder::for(User::class)
        ->allowedFilters([
            AllowedFilter::exact('user_status_id'),
            AllowedFilter::exact('profile_id'),
            ])
        ->get();
// dd($users);
    return view('users.index', compact('users', 'userstatuses', 'profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $profiles = Profile::all();
      $userstatuses = UserStatus::all();
      return view('users.create', [
        'profiles' => $profiles,
        'userstatuses' => $userstatuses
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
          'profile_id' => '',
          'userstatus_id' => '',
          'lastname' => ['required', 'string', 'max:255'],
          'username' => ['required', 'string', 'max:255', 'unique:users'],
          'phone' => ['required', 'string', 'max:255', 'unique:users'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'userpic' => ['image'],

      ]);
      if ($request->exists('userpic')) {
        $imagePath = request('userpic')->store('uploads','s3');
      }else{
        $imagePath = 'uploads/profile.svg';
      }

      if (!request('user_status')) {
        $userstatus = 2;
      }else {
        $userstatus = 1;
      }
      $user = User::create([
          'name' => $request['name'],
          'profile_id' => $request['profile'],
          'user_status_id' => $userstatus,
          'lastname' => $request['lastname'],
          'username' => $request['username'],
          'email' => $request['email'],
          'phone' => $request['phone'],
          'password' => Hash::make('12345678'),
          'userpic' => $imagePath,
      ]);
      $profile = Profile::where('id', $request['profile'])->first();
      $userstatus = UserStatus::where('id', $request['status'])->first();
      return redirect('/users')->with('message', 'New user successfully added');
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
      $profiles = Profile::all();
      $userstatuses = UserStatus::all();
      return view('users.edit', [
        'user' => $user,
        'profiles' => $profiles,
        'userstatuses' => $userstatuses
      ]);
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
      $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'profile_id' => '',
          'userstatus_id' => '',
          'lastname' => ['required', 'string', 'max:255'],
          'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
          'phone' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
          'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
          'userpic' => ['image'],
      ]);
        if (!request('userpic')) {
          $imagePath = $user->userpic;
        }else {
          $imagePath = $request->file('userpic')->store('uploads','s3');
        }
        if (!request('user_status')) {
          $userstatus = 2;
        }else {
          $userstatus = 1;
        }
// dd($userstatus);
        $user -> update([
            'name' => $request['name'],
            'profile_id' => $request['profile'],
            'user_status_id' => $userstatus,
            'lastname' => $request['lastname'],
            'username' => $request['username'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => $user['password'],
            'userpic' => $imagePath,
        ]);
        // $user->profile()->sync($request->profile);
        // $user->user_status()->sync($request->user_status);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $user->delete();
      return redirect('/users');
    }

    /**
     * get users by profile.
     *
     * @param  int  Profile $profile
     * @return \Illuminate\Http\Response
     */
     public function getUsersByName(Request $request){

      $search = $request->search;

      if($search == ''){
         $users = User::orderby('name','asc')->select('id','name')->limit(5)->get();
      }else{
         $users = User::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($users as $user){
        $response[] = array(
          'value'=>$user->id,
          'label'=>$user->name,
          'name'=>$user->name,
          'lastname'=>$user->lastname
        );
      }

      return response()->json($response);
   }
    /**
     * get users by profile.
     *
     * @param  int  Profile $profile
     * @return \Illuminate\Http\Response
     */
     public function getUsersByPhone(Request $request){

      $search = $request->search;

      if($search == ''){
         $users = User::orderby('phone','asc')->select('*')->limit(15)->get();
      }else{
         $users = User::orderby('phone','asc')->select('*')->where([
           ['phone', 'like', '%' .$search . '%'],
           ['profile_id','7']
           ])->limit(15)->get();
      }

      $response = array();
      foreach($users as $user){
         // $response = $user;
         $response[] = array(
           'id'=>$user->id,
           'label'=>$user->phone,
           'email'=>$user->email,
           'name'=>$user->name,
           'lastname'=>$user->lastname
         );
      }

      return response()->json($response);
   }


}
