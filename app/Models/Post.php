<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    const STATUS_DRAFT = 0;
    const STATUS_DONE = 1;
    const STATUS_PUBLIC = 2;

    protected $guarded = [];

    protected $statusArr = [
        self::STATUS_DRAFT => 'Nhấp',
        self::STATUS_DONE => 'Đã viết xong',
        self::STATUS_PUBLIC => 'Công khai'
    ];
    protected $statusColor = [
        self::STATUS_DRAFT =>'danger',
        self::STATUS_DONE => 'warning',
        self::STATUS_PUBLIC => 'success'
    ];
    public function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
    public function getStatusTextAttribute(){
        return '<span class="badge badge-' . $this->statusColor[$this->status] .'">' . $this->statusArr[$this->status] . '<span>';
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_created_id');
    }
    public function userUpdate(){
        return $this->belongsTo(User::class, 'user_updated_id');
    }
}
