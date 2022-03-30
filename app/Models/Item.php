<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function type(){
      return $this->belongsTo(ItemType::class, "item_type_id", "id");
    }

    public function tariffs(){
      return $this->hasMany(Tariff::class);
    }

    public function rentals(){
      return $this->belongsToMany(Rental::class, "item_rental", "item_id", "rental_id");
    }

    public function ownershipItems(){
      return $this->belongsToMany(OwnershipItem::class, "item_ownership", "item_id", "ownership_item_id");
    }
}
