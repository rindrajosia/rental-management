<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    public function user(){
      return $this->belongsTo(User::class, "user_id", "id");
    }

    public function client(){
      return $this->belongsTo(Client::class, "client_id", "id");
    }

    public function status(){
      return $this->belongsTo(RentalStatus::class, "rental_status_id", "id");
    }

    public function payments(){
      return $this->hasMany(Payment::class);
    }

    public function items(){
      return $this->belongsToMany(Item::class, "item_rental", "rental_id", "item_id");
    }
}
