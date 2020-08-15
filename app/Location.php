<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\AccessType;
// use App\ParkingType;
use App\LocationType;
use App\Job;

class Location extends Model
{
    protected $guarded = [];
  // Access Type
  // public function access_type()
  // {
  //   return $this->belongsTo(AccessType::class);
  // }
  // // Parking Type
  // public function Parking_type()
  // {
  //   return $this->belongsTo(ParkingType::class);
  // }
  // Location Type
  public function location_type()
  {
    return $this->belongsTo(LocationType::class);
  }
  // Job
  public function Job()
  {
    return $this->belongsTo(Job::class);
  }
}
