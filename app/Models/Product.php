<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;


    public function setNameAttribute($name){
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
    public function products() {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function category(){
        return $this->belongsTo(Prod_category::class, 'category_id');
    }
    public function reviews (){
        return $this->hasMany(Review::class, 'product_id');
    }
    public function comments (){
        return $this->hasMany(Comment::class, 'product_id');
    }

    public function orders() {
        return $this->belongsToMany(Order::class,'order_product');
    }
    public function coupons() {
        return $this->belongsToMany(Coupon::class,'coupon_product');
    }
}
