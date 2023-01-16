<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Owner extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $fillable = [
        'approved_by','status','name','mobile_no','email','password','profile_photo',
    ];
protected $primaryKey = 'id';
    protected $hidden = [
        'password', 'remember_token',
    ];
}
