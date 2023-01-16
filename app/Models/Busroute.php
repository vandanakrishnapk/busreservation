<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busroute extends Model
{
    use HasFactory;
    protected $fillable = ['bus_id','location'];
}
