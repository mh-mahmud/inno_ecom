<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->getAllOrders();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice_no' => 'required|string|unique:orders,invoice_no',
            'customer_name' => 'required|string',
            'mobile_number' => 'required|string',
            'area' => 'required|in:Inside Dhaka,Outside Dhaka',
            'address' => 'required|string',
            'product_code' => 'required|string',
            'product_name' => 'required|string',
            'product_color' => 'nullable|string',
            'product_size' => 'nullable|string',
            'unit_price' => 'required|numeric',
            'quantity' => 'required|integer',
            'shipping_charge' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
        ]);

        $this->orderService->createOrder($validated);
        return redirect()->route('orders-index')->with('success', 'Order created successfully!');
    }

    public function show($id)
    {
        $order = $this->orderService->getOrder($id);
        return view('orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = $this->orderService->getOrder($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string',
            'mobile_number' => 'required|string',
            'area' => 'required|in:Inside Dhaka,Outside Dhaka',
            'address' => 'required|string',
            'product_code' => 'required|string',
            'product_name' => 'required|string',
            'product_color' => 'nullable|string',
            'product_size' => 'nullable|string',
            'unit_price' => 'required|numeric',
            'quantity' => 'required|integer',
            'shipping_charge' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
        ]);

        $this->orderService->updateOrder($id, $validated);
        return redirect()->route('orders-index')->with('success', 'Order updated successfully!');
    }

    public function destroy($id)
    {
        $this->orderService->deleteOrder($id);
        return redirect()->route('orders-index')->with('success', 'Order deleted successfully!');
    }

    // searech for invoice

    public function search(Request $request)
    {
        $searchTerm = trim($request->input('search'));
        if (empty($searchTerm)) {
            return redirect()->route('orders-index')->with('error', 'Search field cannot be blank.');
        }
        $orders = $this->orderService->searchOrders($request);
        return view('orders.index', compact('orders'));
    }

    
}
