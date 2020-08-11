<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Cargo extends Model
{
  // Jobs
  public function Jobs()
  {
    return $this->belongsTo(Job::class);
  }
}
