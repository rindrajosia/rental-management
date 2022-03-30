<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    public function rentalDuration(){
      return $this->belongsTo(RentalDuration::class, "rental_duration_id", "id");
    }

    public function item(){
      return $this->belongsTo(Item::class, "item_id", "id");
    }
}
