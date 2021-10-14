<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('admin.orders.index',compact('orders'));
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function show($id) {

    }

    public function destroy($id) {

    }
}