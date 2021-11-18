<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [
        'updated_at'
    ];
    const STATUS_EXPORT = 0;
    const STATUS_DELIVERY = 1;
    const STATUS_DONE = 2;
    public function products(){
        return $this->belongsToMany(Product::class,'order_product');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $statusArr = [
        self::STATUS_EXPORT => 'Đang xuất kho',
        self::STATUS_DELIVERY => 'Đang giao hàng',
        self::STATUS_DONE => 'Thanh toán thành công'
    ];

    protected $statusColor = [
        self::STATUS_EXPORT =>'danger',
        self::STATUS_DELIVERY => 'warning',
        self::STATUS_DONE => 'success'
    ];
    public function getStatusTextAttribute(){
        return '<span class="badge badge-' . $this->statusColor[$this->status] .'">' . $this->statusArr[$this->status] . '<span>';
    }
}
