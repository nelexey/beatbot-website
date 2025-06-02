<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAdminController extends Controller
{
    public function index()
    {
        $orders = Order::paginate();

        return view('admin.orders', compact('orders'));
    }

}
