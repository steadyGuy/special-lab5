<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TourType;

class Tour extends Model
{
    use HasFactory;

    public function getTourType() {
       return TourType::find($this->tour_type_id);
    }

    // Зависимость товара от категории (получить категорию у товара)
    public function tourType() {
        return $this->belongsTo(TourType::class);
    }
}
