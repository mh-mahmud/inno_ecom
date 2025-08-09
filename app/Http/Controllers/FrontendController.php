<?php
namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\Cart;
use App\Models\BillingAddress;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\Wishlist;
use App\Models\Settings;
use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;
use App\Models\Order;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->latest()->get();
        $newArrivals = Product::where('status', 1)
            ->where('product_tag', 'New Arrival')
            ->latest()
            ->limit(10)
            ->get();
        $topSelling = Product::where('status', 1)
            ->where('product_tag', 'Top Selling')
            ->latest()
            ->limit(10)
            ->get();
        $tShirts = Product::where('status', 1)
        ->where('category_id', 4)
        ->latest()
        ->limit(10)
        ->get();

        $denimPant = Product::where('status', 1)
        ->where('category_id', 9)
        ->latest()
        ->limit(10)
        ->get();
        return view('frontend.index', compact('sliders', 'newArrivals','topSelling','tShirts','denimPant'));
    }


    public function categoryProduct($category_id)
    {
        $category = Category::findOrFail($category_id);
        $products = Product::where('category_id', $category_id)
                    ->where('status', 1)
                    ->paginate(20); 
        return view('frontend.category_product', compact('products', 'category'));
    }

    public function productDetails($id)
    {
        $product = Product::where('status', 1)->findOrFail($id);
        //dd($product);
        $newArrivals = Product::where('status', 1)
            ->where('product_tag', 'New Arrival')
            ->latest()
            ->limit(10)
            ->get();
        $colors = $product->colors ? explode(',', $product->colors) : [];
        $sizes = $product->size_list ? explode(',', $product->size_list) : [];
        return view('frontend.product_details', compact('product','newArrivals', 'colors', 'sizes'));
    }

    public function my_wishlist() {
        if(Auth::user()) {
            $lists = Wishlist::where('user_id', Auth::user()->id)->get();
        }
        else {
            $lists = Wishlist::where('session_id', Session::get('sami-fashions-visitor'))->get();
        }
        // dd(Session::get('sami-fashions-visitor'));
        
        return view('frontend.my_wishlist', compact('lists'));
    }

    public function remove_wishlist($id) {
        if(Auth::user()) {
            $lists = Wishlist::where('user_id', Auth::user()->id)->where('id', $id)->delete();
        }
        else {
            $lists = Wishlist::where('session_id', Session::get('sami-fashions-visitor'))->where('id', $id)->delete();
        }
        return redirect()->route('my-wishlist')->with('success', 'Item deleted from wishlist successfully');
    }

    public function add_wishlist(Request $request)
    {
        if(Session::get('sami-fashions-visitor')==null) {
            $session_value = str_pad(mt_rand(1, 9999999999999), 10);
            Session::put('sami-fashions-visitor', $session_value);
        }
        $request->validate([
            'product_id' => 'required|exists:products,id', // Validate the product ID
        ]);

        // Check if the product is already in the wishlist
        if(Auth::user()) {
            $exists = Wishlist::where('user_id', auth()->id())->where('product_id', $request->product_id)->exists();
        }
        else {
            $exists = Wishlist::where('session_id', Session::get('sami-fashions-visitor'))->where('product_id', $request->product_id)->exists();
        }

        if ($exists) {
            return response()->json([
                'status' => 'error',
                'message' => 'This product is already in your wishlist!',
            ]);
        }

        // Add the product to the wishlist
        $product_data = Product::findOrFail($request->product_id);
        Wishlist::create([
            'user_id' => !empty(auth()->id()) ? auth()->id() : null,
            'session_id' => !empty(Session::get('sami-fashions-visitor')) ? Session::get('sami-fashions-visitor') : null,
            'product_id' => $request->product_id,
            'unit_price' => $product_data->product_value,
            'product_image' => $product_data->img_path,
            'product_name' => $product_data->name
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Product added to wishlist!',
        ]);
    }


    public function searchProduct(Request $request)
    {
        $query = Product::query();
        $category = null;
        $searchTerm = $request->search; // capture search term

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
            $category = Category::find($request->category);
        }

        $products = $query->where('status', 1)->paginate(20);

        return view('frontend.search_product', compact('products', 'category', 'searchTerm'));
    }





    public function about()
    {
        return view('frontend.about');
    }

    public function add_to_cart(Request $request,$product_id) {
        //dd($request);

            // return Session::forget('sami-fashions-visitor');
            // dd(Session::get('sami-fashions-visitor'));
        if(Session::get('sami-fashions-visitor')==null) {

            $session_value = str_pad(mt_rand(1, 9999999999999), 10);
            Session::put('sami-fashions-visitor', $session_value);
        }

        $cookie_id = Session::get('sami-fashions-visitor');
        $product_id = $product_id;
        $user_id = Auth::user()==null ? null : Auth::user()->id;
        $product_data = Product::find($product_id);
        $session_id = Auth::user()==null ? $cookie_id : null;
        $product_quantity = 1;
        $discount = 0;

        // check if product is already in cart
        $chk_cart = !empty(Auth::user()) ? Cart::where('user_id', $user_id)->where('product_id', $product_id)->first() : Cart::where('session_id', $session_id)->where('product_id', $product_id)->first();
        // dd($chk_cart);
        if(!empty($chk_cart)) {
            $chk_cart->quantity += 1;
            $chk_cart->total_price = $chk_cart->quantity*$product_data->product_value;
            $chk_cart->update();
        }
        else {

            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->session_id = $session_id;
            $cart->product_id = $product_id;
            $cart->product_image = $product_data->img_path;
            $cart->product_name = $product_data->name;
            $cart->unit_price = $product_data->product_value;
            $cart->colors = $request->color;
            $cart->size_list = $request->size;
            //$cart->max_purchase_limit = $product_data->max_purchase_limit;
            //$cart->quantity = $product_quantity;
            $cart->quantity = $request->qty;
            $cart->total_price = $request->qty*$product_data->product_value;
            $cart->discount = $discount;
            $cart->final_price = $cart->total_price - $discount;
            $cart->save();

        }
        return redirect()->route('add-to-cart-details')->with('success', 'Product added to the cart successfully.');
    }

    public function add_to_cart_details() {
        $session_id = Session::get('sami-fashions-visitor');
        $carts = [];

        if(Auth::user() == null && $session_id!=null) {
            $carts = Cart::where('session_id', $session_id)->get();
        }
        else if(Auth::user() != null) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        }

        return view('front.html.add_to_cart', compact('carts'));
    }

    public function setCookie()
    {
        $cookie_value = str_pad(mt_rand(1, 9999999999999), 10);
        setcookie("sami-fashions-visitor", $cookie_value, time() + 36000, '/');
        return;
    }

    public function getCookie(Request $request)
    {
        $user = $request->cookie('user');
        return response("User: $user");
    }

    public function checkout_page() {

        if(Auth::user() && Auth::user()->user_type=='admin') {
            return redirect()->back()->with('error', 'You are logged in as an admin. As a system user, you can not checkout.');
        }
        $session_id = Session::get('sami-fashions-visitor');
        $carts = [];
        if(Auth::user()) {
            $carts = Cart::where('user_id', Auth::user()->id)->get();
        }
        else if($session_id != null) {
            $carts = Cart::where('session_id', $session_id)->get();
        }

        //dd($carts);
        
        return view('front.html.checkout_page', compact('carts', 'session_id'));
    }

    public function track_your_order() {
        return view('front.html.track_your_order');
    }

    public function post_track_your_order(Request $request) {
        $request->validate([
            'phone_number' => 'required',
            'order_id' => 'required'
        ]);

        $chk_data = Order::where('custom_order_id', $request->order_id)->where('order_phone_number', $request->phone_number)->first();

        if($chk_data==null) {
            return redirect()->back()->with('error', 'Invalid order data');
        }

        $order_id = $chk_data->id;
        $lists = OrderDetail::with('products')->where('order_id', $order_id)->get();
        // dd($lists);

        return view('front.html.post_track_your_order', compact('lists', 'chk_data'));
    }

    public function remove_from_cart($id) {
        if(Auth::user()) {
            $lists = Cart::where('user_id', Auth::user()->id)->where('id', $id)->delete();
        }
        else {
            $lists = Cart::where('session_id', Session::get('sami-fashions-visitor'))->where('id', $id)->delete();
        }
        return redirect()->route('add-to-cart-details')->with('success', 'Item deleted from cart successfully');
    }

    public function customer_order_history() {
        $id = Auth::user()->id;
        $orders = Order::join('billing_address', 'orders.billing_address_id', '=', 'billing_address.id')
            ->select('orders.id as lukaku', 'orders.*', 'billing_address.*')
            ->where('orders.user_id', $id)
            ->orderBy('orders.id', 'desc')
            ->paginate(config('constants.ROW_PER_PAGE'));
        // dd($orders);
        return view('front.html.order_history', compact('orders'));
    }

    public function customer_order_details($order_id) {
        $order = Order::join('billing_address', 'orders.billing_address_id', '=', 'billing_address.id')
            ->select('orders.*', 'orders.id as lukaku', 'billing_address.*')
            ->where('orders.custom_order_id', $order_id)
            ->first();
        $orderDetails = OrderDetail::with('product')->where('order_id', $order->lukaku)->get();
        return view('front.html.customer_order_details', compact('order', 'orderDetails'));
    }

    public function go_checkout(Request $request) {
        // dd($request->all());
        $data = $request->all();
        // dd($data['cart_id']);
        for($i=0; $i<count($data['cart_id']); $i++) {
            $cart = Cart::findorfail($data['cart_id'][$i]);
            $cart->quantity = $data['quantity'][$i];
            $cart->total_price = $cart->unit_price * $data['quantity'][$i];
            $cart->final_price = $cart->unit_price * $data['quantity'][$i];
            $cart->save();
            // dd($cart);
        }
        return redirect()->route('checkout');
    }

    public function checkout_store(Request $request) {

        if(substr($request->mobile, 0, 1) == "+") {
            $request->mobile = substr($request->mobile, 3);
        }

        if(Auth::user()) {
            $carts = Cart::where('user_id', Auth::user()->id)->get();
        }
        else {
            $carts = Cart::where('session_id', $request->cart_session_id)->get();
        }

        DB::beginTransaction();
        try {
            $ship = new BillingAddress();
            $ship->user_id = (Auth::user() != null) ? Auth::user()->id : null;
            $ship->session_id = (Auth::user() == null) ? $request->cart_session_id : null;
            $ship->first_name = $request->first_name;
            $ship->last_name = $request->last_name;
            $ship->company_name = $request->company_name;
            $ship->email = $request->email;
            $ship->mobile = $request->mobile;
            $ship->city = $request->city;
            $ship->state = $request->state;
            $ship->zip = $request->zip;
            $ship->shipping_address = $request->shipping_address;
            $ship->shipping_address_2 = $request->shipping_address_2;
            $ship->save();

            // dd($ship);

            // save to order table
            $order = new Order();
            $order->user_id = (Auth::user()!=null) ? Auth::user()->id : null;
            $order->session_id = (Auth::user() == null) ? $request->cart_session_id : null;
            $order->billing_address_id = $ship->id;
            $order->custom_order_id = $this->generateUniqueOrderId();
            $order->order_phone_number = $request->mobile;
            $order->total_price = $request->total_price;
            $order->discount = $request->discount;
            $order->final_price = $request->total_price - $request->discount;
            // $order->coupon = $request->coupon;
            $order->payment_status = "NOT PAID";
            $order->order_note = $request->order_note;
            $order->order_status = "PROCESSING";
            $order->payment_type = "Cash on Delivery";
            $order->delivery_charge = $request->shipping;
            $order->possible_delivery_date = date("Y-m-d h:i:s", time() + 86400 + 86400);
            $order->save();


            // add to details page
            foreach($carts as $cart) {
                OrderDetail::create([
                    'user_id' => (Auth::user()!=null) ? Auth::user()->id : null,
                    'session_id' => (Auth::user() == null) ? $request->cart_session_id : null,
                    'product_id' => $cart->product_id,
                    'order_id' => $order->id,
                    'quantity' => $cart->quantity,
                    'colors' => $cart->colors,
                    'size_list' => $cart->size_list,
                    'unit_price' => $cart->unit_price,
                    'total' => $cart->total_price
                ]);
            }

            // destroy the cart
            if(Auth::user()) {
                Cart::where('user_id', Auth::user()->id)->delete();
            }
            else {
                Cart::where('session_id', $request->cart_session_id)->delete();
                Session::forget('sami-fashions-visitor');
            }


            DB::commit();

            // send message
            $messages = "Welcome to https://greenfarm.com.bd, Thanks for your order. " . $order->custom_order_id . " is your order number. Please save your order number for future tracking.";

            $phone = "88".$request->mobile . "";
            $response = Helper::send_sms($phone, $messages);
            $last_order = Order::findOrFail($order->id);
            $last_order->sms_response = $response;
            $last_order->save();

            return redirect()->route('checkout')->with('success', "Thanks for your order.Order submitted successfully. Your order number is " . $order->custom_order_id . " Please save your order number for future tracking");
        } catch (\Exception $e) {
            DB::rollBack();
            return 'Transaction failed: ' . $e->getMessage();
        }
    }


    public function generateUniqueOrderId($length = 6) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $orderId = '';

        for ($i = 0; $i < $length; $i++) {
            $orderId .= $characters[random_int(0, strlen($characters) - 1)];
        }

        // Prepend a timestamp for uniqueness (optional)
        // return time() . $orderId;
        return $orderId;
    }

    public function product_search(Request $request) {
        if(empty($request->search_product)) {
            return redirect()->back();
        }

        $sql = Product::with('category');
        if (!empty($request->search_product)) {
            $sql->where('name', 'like', '%' . $request->search_product . '%');
        }
        $products = $sql->orderBy('id', 'DESC')->paginate(30);

        // attach with product page
        $count = count($products);
        $page = "Products";
        $cat = "Search Products";
        return view('front.html.products', compact('products', 'count', 'page', 'cat'));
    }

    public function post_contact_form(Request $request) {

        $request->validate([
            'full_name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'contact_message' => 'required'
        ]);

        $data = new ContactForm();
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->contact_message = $request->contact_message;
        $data->save();
        return redirect()->back()->with('success', 'Thank you. Form submitted successfully, Admin will contcat with you soon.');
    }

}