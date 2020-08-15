<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Location;

class LocationType extends Model
{
  // Locations
  public function Locations()
    {
      return $this->hasMany(Location::class);
    }
}
