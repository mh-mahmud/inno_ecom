<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use App\Models\OrderInfo;

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
        //$products = Product::select('id', 'name', 'description', 'product_value')->get();
        $customers = Customer::all();

        return view('orders.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|exists:customers,id',
            'mobile_number' => 'required|string',
            'area' => 'required|string',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.unit_price' => 'required|numeric|min:0',
            'products.*.product_color' => 'nullable|string',
            'products.*.product_size' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $this->orderService->createOrder($request);
        Helper::storeLog("Order created successfully", "Order", "Create Order", null,null);
        return redirect()->route('orders-index')->with('success', 'Order created successfully.');
    }
    

    public function show_backup($id)
    {
        $order = $this->orderService->getOrder($id);
        return view('orders.show', compact('order'));
    }

    public function show($id)
    {

        $data = $this->orderService->getOrder($id);
        return view('orders.show', [
            'order' => $data['order'],
            'orderDetails' => $data['orderDetails'],
        ]);
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

    public function updateOrderStatus(Request $request, $id)
    {
        // Validation
        $request->validate([
            'meeting_feedback' => 'string|max:255',
        ]);

        // Update the meeting via service
        $result = $this->orderService->updateOrderStatus($id, $request->input('status'));

        if ($result) {
            Helper::storeLog("Order Status updated successfully", "Order", "updateOrderStatus", null);
            return redirect()->route('orders-index')->with('success', 'Order Status updated successfully.');
        } else {
            Helper::storeLog("Failed to update the Order status", "Order", "updateOrderStatus", null);
            return back()->withErrors(['error' => 'Failed to update Order.']);
        }
    }

    public function getOrderStatus($id)
    {
        $meeting = OrderInfo::find($id);
        if (!$meeting) {
            return response()->json(['error' => 'Meeting not found'], 404);
        }
        //return the Orde JSON response
        return response()->json([
            'meeting_feedback' => $meeting->meeting_feedback,
            'rating' => $meeting->rating,
        ]);
    }

    
}
