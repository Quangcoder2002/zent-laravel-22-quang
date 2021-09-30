<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $statusArr = [
        0 => 'Ẩn',
        1 => 'Hiện'
    ];
    public function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
}
