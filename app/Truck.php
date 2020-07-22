<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Truck extends Model
{
  public function Jobs()
    {
      return $this->hasMany(Job::class);
    }
}
