<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function frontIndex(){
        App::setLocale(session('locale'));
        $products = Product::where('status' , 'active')->orderBy('id' , 'desc')->get();
        $categories = Category::where('status' , 'active')->get();
        $banners = Banner::all();
        return view('front.index',compact('products' , 'categories' , 'banners'));
    }
}
