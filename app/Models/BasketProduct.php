<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketProduct extends Model
{
    use HasFactory;
      public function baskets() {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}
