<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket() {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
                $order = Order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request) {

        $orderId = session('orderId');
        if (is_null($orderId)) {
           return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $order->saveOrder($request->name, $request->phone);

        return redirect('/');
    }

    public function basketPlace() {
        $orderId = session('orderId');
        if (is_null($orderId)) {
           return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('order', compact('order'));
    }

    public function basketAdd($tourId) {
        // Чтобы-работать з сессиями юзаем хелпер session

        $orderId = session('orderId');

        if(is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
             $order = Order::find($orderId);
        }
        // Используем связь belongsToMany
        $order->tours()->attach($tourId);

        return redirect('/basket');
    }
}
