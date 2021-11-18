<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
 
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $featured_product = Cache::remember('featured_product', 24*60*60*60, function () {
            $time_stamp =  date('Y-m-d H:i:s',strtotime(now())-7*24*60*60);
            $time_now =  date('Y-m-d H:i:s',strtotime(now()));
            return Product::whereBetween('created_at', [$time_stamp,$time_now])->orderBy('view_count', 'desc')->take(3)->get();
        });
        View::share('featured_product', $featured_product);
        $new_products = Cache::remember('new_product', 60*60*60, function () {
            $time_stamp =  date('Y-m-d H:i:s',strtotime(now())-24*60*60);
            $time_now =  date('Y-m-d H:i:s',strtotime(now()));
            return Product::whereBetween('created_at', [$time_stamp,$time_now])->orderBy('view_count', 'desc')->take(3)->get();
        });
        View::share('new_products', $new_products);
        
        $top_products = Cache::remember('top_products', 60*60*60, function () {
            $time_stamp =  date('Y-m-d H:i:s',strtotime(now())-7*24*60*60);
            $time_now =  date('Y-m-d H:i:s',strtotime(now()));
            return Product::whereBetween('created_at', [$time_stamp,$time_now])->orderBy('view_count', 'desc')->take(3)->get();
        });
        View::share('top_products', $top_products);
        Paginator::useBootstrap();
    }
}
