<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function getAllOrders()
    {
        return Order::orderBy('order_date', 'desc')->paginate(config('constants.ROW_PER_PAGE'));
    }

    public function createOrder($data)
    {
       
        $data['total_price'] = $data['unit_price'] * $data['quantity'];
        return Order::create($data);
    }

    public function getOrder($id)
    {
        return Order::findOrFail($id);
    }

    public function updateOrder($id, $data)
    {
        $order = Order::findOrFail($id);
        $data['total_price'] = $data['unit_price'] * $data['quantity'];
        $order->update($data);
        return $order;
    }

    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        return $order->delete();
    }

    public function searchOrders($searchTerm)
    {
        return Order::where('customer_name', 'LIKE', "%$searchTerm%")
            ->orWhere('invoice_no', 'LIKE', "%$searchTerm%")
            ->orWhere('product_name', 'LIKE', "%$searchTerm%")
            ->orderBy('order_date', 'desc')
            ->paginate(config('constants.ROW_PER_PAGE'));
    }
}
