<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UserInfo extends Model
{
    use HasFactory;
    
    
    public function user(){
        return  $this->belongsTo(UserInfo::class);
    }
    public function getAvatarFullAttribute(){
            if (!empty($this->avatar)||$this->avatar != null) {
                return Storage::disk($this->disk)->url($this->avatar);
            }
            return Storage::disk('public')->url('avatar.jpg');
    }
}
