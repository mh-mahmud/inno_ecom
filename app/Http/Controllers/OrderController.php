<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
        
        $products = Product::all();
        $customers = Customer::all();

        return view('orders.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|exists:customers,id',
            'mobile_number' => 'nullable|regex:/^\+?[1-9]\d{1,14}$/',
            'area' => 'required|in:Inside Dhaka,Outside Dhaka',
            'contact_address' => 'nullable|string',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'unit_price' => 'required|numeric|min:0',
            'mprize' => 'nullable|numeric',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $this->orderService->createOrder($request);
        Helper::storeLog("Order created successfully", "Order", "Create Order", null, $request->customer_id);
        return redirect()->route('orders-index')->with('success', 'Order created successfully.');
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
