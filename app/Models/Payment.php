<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function user(){
      return $this->belongsTo(User::class, "user_id", "id");
    }

    public function rental(){
      return $this->belongsTo(Rental::class, "rental_id", "id");
    }
}
