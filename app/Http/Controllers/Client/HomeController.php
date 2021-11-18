<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Prod_category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $time_stamp =  date('Y-m-d H:i:s',strtotime(now())-7*24*60*60);
        $time_now =  date('Y-m-d H:i:s',strtotime(now()));
        $features = Product::whereBetween('created_at', [$time_stamp,$time_now])->orderBy('view_count','desc')->take(20)->get();
        $top_views = Product::orderBy('view_count', 'desc')->take(20)->get();
        $news = Product::orderBy('created_at', 'desc')->take(20)->get();
        $brand = Brand::take(20)->get();
        $cate_products = Prod_category::take(20)->get();
        return view('client.home')->with([
           'features' => $features,
           'top_views' => $top_views,
           'news' => $news,
           'brand' => $brand,
           'cate_products' => $cate_products 
        ]);
    }
}
