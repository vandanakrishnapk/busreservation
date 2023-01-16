<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Seeder\AdminSeeder;
use Illuminate\Support\Facades\Auth;
class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = "admins";

  protected $fillable = [
     'name',
     'mobile_no',
     'email',
     'password',
     'profile_photo',
  ];   
  protected $hidden = [
    'password',
    'remember_token',
];   
    
}
