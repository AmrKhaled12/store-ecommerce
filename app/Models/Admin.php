<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'added_by',
        'updated_by',

    ];
    public function admin_panel_settings(){
        return $this->hasMany(Admin_panel_setting::class,'admin_id');
    }


}
