<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Truck;
use App\User;
use App\JobStatus;
use App\TimeFrame;
use App\Contact;
use App\Location;

class Job extends Model
{
    protected $guarded = [];
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
    // Locations
    public function Locations()
    {
      return $this->hasMany(Location::class);
    }
    // Contacts
    public function Contacts()
      {
        return $this->hasMany(Contact::class);
      }
}
