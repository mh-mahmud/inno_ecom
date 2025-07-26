<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderInfo;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Support\Str;

class OrderService
{
    public function getAllOrders()
    {
        return Order::join('billing_address', 'orders.billing_address_id', '=', 'billing_address.id')
            ->select(
                'orders.*',
                'billing_address.first_name',
                'billing_address.last_name',
                'billing_address.shipping_address'
            )
            ->orderBy('orders.id', 'desc')
            ->paginate(config('constants.ROW_PER_PAGE'));
    }




    public function createOrder_backup($request)
    {

        $order = OrderInfo::create([
            'invoice_no' => 'INV-' . Str::upper(Str::random(8)),
            'customer_id' => $request->customer_id,
            'mobile_number' => $request->mobile_number,
            'area' => $request->area,
            'contact_address' => $request->contact_address,
            'sub_total' => $request->unit_price * $request->quantity,
            'order_tax' => 0,
            'shipping_charge' => 0,
            'discount' => 0,
            'payable_amount' => $request->unit_price * $request->quantity,
            'status' => 'New',
            'order_date' => now(),
        ]);


        OrderDetail::create([
            'order_id' => $order->order_id,
            'product_id' => $request->product_id,
            'product_code' => Product::find($request->product_id)->product_code,
            'product_name' => Product::find($request->product_id)->name,
            'product_color' => $request->product_color,
            'product_size' => $request->product_size,
            'unit_price' => $request->unit_price,
            'mprize' => $request->mprize,
            'quantity' => $request->quantity,
            'total_price' => $request->unit_price * $request->quantity,
        ]);
    }


    public function createOrder($request)
    {

        $order = OrderInfo::create([
            'invoice_no' => mt_rand(10000, 99999),
            'customer_id' => $request->customer_id,
            'mobile_number' => $request->mobile_number,
            'area' => $request->area,
            'contact_address' => $request->contact_address,
            //'sub_total' => $request->unit_price * $request->quantity, 
            'sub_total' =>  $request->sub_total,
            'order_tax' => 0,
            'shipping_charge' =>  $request->shipping_charge,
            'discount' => $request->discount,
            'payable_amount' => $request->payable_amount,
            'status' => 'New',
            'order_date' => now(),
        ]);

        //every product to the order details
        foreach ($request->products as $product) {
            OrderDetail::create([
                'order_id' => $order->order_id,
                'product_id' => $product['product_id'],
                'product_code' => Product::find($product['product_id'])->product_code,
                'product_name' => Product::find($product['product_id'])->name,
                'product_color' => $product['product_color'],
                'product_size' => $product['product_size'],
                'unit_price' => $product['unit_price'],
                'quantity' => $product['quantity'],
                'total_price' => $product['unit_price'] * $product['quantity'],
            ]);
        }
    }


    public function getOrder_backup($id)
    {
        return OrderInfo::join('customers', 'order_info.customer_id', '=', 'customers.id')
        ->select('order_info.*', 'customers.name as customer_name')
        ->where('order_info.order_id', $id)
        ->firstOrFail();
    }

    public function getOrder_backup_final($id)
    {

        $order = OrderInfo::join('customers', 'order_info.customer_id', '=', 'customers.id')
        ->select('order_info.*')
        ->where('order_info.order_id', $id)
        ->firstOrFail();
        $orderDetails = OrderDetail::where('order_id', $id)
            ->get();
        return [
            'order' => $order,
            'orderDetails' => $orderDetails,
        ];
    }
    public function getOrder($id)
{
    // Get single order row
    $order = Order::join('billing_address', 'orders.billing_address_id', '=', 'billing_address.id')
        ->select(
            'orders.*',
            'billing_address.first_name',
            'billing_address.last_name',
            'billing_address.shipping_address'
        )
        ->where('orders.id', $id)
        ->firstOrFail();

    // Get all related products
    $orderDetails = OrderDetail::join('products', 'order_details.product_id', '=', 'products.id')
        ->select(
            'order_details.*',
            'products.name as product_name',
            'products.img_path',
            'products.product_code'
        )
        ->where('order_details.order_id', $id)
        ->get();

    return [
        'order' => $order,
        'orderDetails' => $orderDetails,
    ];
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
        $order = OrderInfo::findOrFail($id);
        $order->orderDetails()->delete();
        return $order->delete();
    }


    public function searchOrders($request)
{
    $searchTerm = trim($request->input('search'));

    return Order::join('billing_address', 'orders.billing_address_id', '=', 'billing_address.id')
        ->select(
            'orders.*',
            'billing_address.first_name',
            'billing_address.last_name',
            'billing_address.shipping_address'
        )
        ->where(function ($query) use ($searchTerm) {
            $query->where('orders.order_phone_number', 'LIKE', "%$searchTerm%")
                ->orWhere('orders.custom_order_id', 'LIKE', "%$searchTerm%");
        })
        ->orderBy('orders.id', 'desc')
        ->paginate(config('constants.ROW_PER_PAGE'));
}



    public function updateOrderStatus($id, $status)
    {
        $order = Order::find($id);
        if (!$order) {
            return false;
        }
        $order->order_status = $status;
        return $order->save();
    }

}
