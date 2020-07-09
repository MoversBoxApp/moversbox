<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
      dd(request()->all());
    }

    public function store()
    {
        // $data = request();
        // dd(request()->all());

    }
}
