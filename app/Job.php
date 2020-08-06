<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Truck;
use App\User;
use App\JobStatus;
use App\TimeFrame;
use App\Contact;

class Job extends Model
{
    // Truck
    public function truck()
    {
      return $this->belongsTo(Truck::class);
    }
    // JobStatus
    public function job_status()
    {
      return $this->belongsTo(JobStatus::class);
    }
    // TimeFrame
    public function time_frame()
    {
      return $this->belongsTo(TimeFrame::class);
    }
    // Users
    public function Users()
    {
      return $this->belongsToMany(User::class);
    }
    // Contacts
    public function Contacts()
      {
        return $this->hasMany(Contact::class);
      }
}
