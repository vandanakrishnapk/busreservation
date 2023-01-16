<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
   protected $fillable=[
'owner_id',
'bus_plate_no',
'date',
'bus_name',
'bus_type',
'capacity',
'location',
];
}
