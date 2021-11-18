<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userInfo(){
        return $this->hasOne(UserInfo::class);
    }

    public function posts (){
        return $this->hasMany(Post::class, 'user_created_id');
    }
    public function orders (){
        return $this->hasMany(Order::class, 'user_id');
    }
    public function roles() {

        return $this->belongsToMany(Role::class,'users_roles');

    }
    public function permissions() {

        return $this->belongsToMany(Permission::class,'users_permissions');

    }

    protected function hasPermission($permission) {
        return (bool) $this->permissions->where('slug', $permission->slug)->count();
    }

    public function hasPermissionTo($permission) {

        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
      }
    
    public function hasPermissionThroughRole($permission) {
        foreach ($permission->roles as $role){
          if($this->roles->contains($role)) {
            return true;
          }
        }
        return false;
    }

    public function reviews (){
        return $this->hasMany(Review::class, 'user_id');
    }
    public function comments (){
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function checkUserInfoAvatar(){
       if (empty($this->userInfo)) {
        return Storage::disk('public')->url('avatar.jpg');
       }else{
        return null;
       }
       
   }
    
}
