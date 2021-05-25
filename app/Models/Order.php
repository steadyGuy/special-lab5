<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tour;

class Order extends Model
{
    use HasFactory;

    public function tours() {
        return $this->belongsToMany(Tour::class);
    }

    public function getFullPrice() {
        $sum = 0;
        foreach ($this->tours as $tour) {
            $sum += $tour->price;
        }

        return $sum;
    }

    public function saveOrder($name, $phone) {
        $this->name = $name;
        $this->phone = $phone;
        $this->status = 1;
        $this->save();
        session()->forget('orderId');
    }
}
