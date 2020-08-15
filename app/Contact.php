<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Contact extends Model
{
    protected $guarded = [];
  // Jobs
  public function Users()
  {
    return $this->belongsTo(Job::class);
  }
}
