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
        return view('frontend.index', compact('sliders'));
    }

    public function categoryProduct($category_id)
    {
        $category = Category::findOrFail($category_id);
        $products = Product::where('category_id', $category_id)
                    ->where('status', 1)
                    ->paginate(1); 
        return view('frontend.category_product', compact('products', 'category'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}