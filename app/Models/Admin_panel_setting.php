<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin_panel_setting extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'phone',
        'address',
        'general_alert',
        'com_code',
        'added_by',
        'updated_by',

    ];
    public function admins(){
        return $this->belongsTo(Admin::class,'admin_id');
    }

}
