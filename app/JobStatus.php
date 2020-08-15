<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class JobStatus extends Model
{
  // Jobs
  public function Jobs()
    {
      return $this->hasMany(Job::class);
    }
}
