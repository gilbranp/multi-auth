<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleMenu extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function menu(){
        return $this->hasOne(Menu::class,'id','menu_id');
    }
    public function role(){
        return $this->hasOne(Role::class,'id','role_id');
    }
}
