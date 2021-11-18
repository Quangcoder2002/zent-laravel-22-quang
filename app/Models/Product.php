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
    public function getSalePriceFormatAttribute() {
        return number_format($this->sale_price,0,'','.').'đ';
    }
    public function getOrginPriceFormatAttribute() {
        return number_format($this->orgin_price,0,'','.').'đ';
    }
    public function getPercentFormatAttribute() {
        $percent = ($this->orgin_price-$this->sale_price)/$this->orgin_price*100;
        return number_format($percent,0,'','.').'%';
    }
    public function getCreatedAtFormatAttribute() {
        return $this->created_at->format('d/m/Y');
    }
    public function getShowPercentAttribute() {
        $percent = ($this->orgin_price-$this->sale_price)/$this->orgin_price*100;
        if ($percent != 0) {
            return' <div class="ribbon-price red"><span>- '.number_format($percent,0,'','.').'%</span></div>';
        }
    }
    public function getShowPriceAttribute() {
        if ($this->orgin_price == $this->sale_price) {
            return'<span>'.$this->orgin_price_format.'</span>';
        }
        return'<span class="red">'.$this->sale_price_format.'</span><span class="old">'.$this->orgin_price_format.'</span>';
    }
}
