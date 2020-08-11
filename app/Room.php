<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Room extends Model
{
  // Contacts
  public function Items()
    {
      return $this->hasMany(Item::class);
    }
}
