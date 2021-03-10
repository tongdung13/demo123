<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use PDO;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        $order = Order::all();
        return response()->json($customer, $order);
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $order = Order::all();
        $customer->fill($request->all());
        $customer->save();
        return response()->json($customer, $order);
    }

    public function edit(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->fill($request->all());
        $customer->save();
        $order = Order::all();
        return response()->json($customer, $order);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json($customer);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return response()->json($id);
    }

}
