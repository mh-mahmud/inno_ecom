<?php
namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->latest()->get();
        return view('frontend.index', compact('sliders'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}