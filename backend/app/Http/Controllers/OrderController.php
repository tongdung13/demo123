<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->fill($request->all());
        $order->save();
        return response()->json($order);
    }

    public function edit(Request $request, $id)
    {
        $order = Order::find($id);
        $order->fill($request->all());
        $order->save();
        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->json($order);
    }

    public function show($id)
    {
        $order = Order::find($id);
        return response()->json($order);
    }
}
