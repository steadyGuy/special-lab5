<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourType extends Model
{
    use HasFactory;

    // Зависимость категории от товара (получить товары по категории)
    public function tours() {
        return $this->hasMany(Tour::class);
    }
}
