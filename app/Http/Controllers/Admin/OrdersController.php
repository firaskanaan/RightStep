<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
         $orders=Order::get();

        return view('dashboard.pages.order.showOrders',compact('orders'));

    }
}
