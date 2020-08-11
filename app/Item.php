<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class Item extends Model
{
  // Jobs
  public function Room()
  {
    return $this->belongsTo(Room::class);
  }
}
