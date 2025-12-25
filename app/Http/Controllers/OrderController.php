<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Orders::all();
        return view('order.index', compact('orders'));
    }

    public function store(Request $request, Orders $order)
    {
        $data = $request -> validate([
            'date' => 'date',
            'time' => 'string',
            'type' => 'string',
            'payment' => 'string',
            'adress' => 'string',
            'status_id' => 'integer',
            'user_id' => 'integer',
        ]);

        $order->create($data);
        return redirect()->back();
    }

    public function destroy(Orders $order)
    {
        $order -> delete();
        return redirect()->back();
    }
}
