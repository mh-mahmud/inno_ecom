<?php
namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;

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
                    ->paginate(10); 
        return view('frontend.category_product', compact('products', 'category'));
    }

    public function productDetails($id)
    {
        $product = Product::where('status', 1)->findOrFail($id);
        $newArrivals = Product::where('status', 1)
            ->where('product_tag', 'New Arrival')
            ->latest()
            ->limit(10)
            ->get();
        return view('frontend.product_details', compact('product','newArrivals'));
    }


    public function about()
    {
        return view('frontend.about');
    }
}