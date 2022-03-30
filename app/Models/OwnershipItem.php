<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnershipItem extends Model
{
    use HasFactory;

    public function type(){
      return $this->belongsTo(ItemType::class, "item_type_id", "id");
    }

    public function items(){
      return $this->belongsToMany(Item::class, "item_ownership", "ownership_item_id", "item_id");
    }
}
