<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfilesController extends Controller
{
    public function index()
    {
      $profiles = Profile::all();
// dd($profiles);
      return view('admin.users-filter', ['profiles' => $profiles]);
    }

}
