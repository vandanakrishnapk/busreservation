<?php

namespace App\Http\Controllers\user;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function welcome()
   {
    $item = DB::table('locations')->get();
    $date = DB::table('buses')->get();
    $capacity = DB::table('capacities')->get();
    $bustype = DB::table('bus_types')->get();    
    return view('welcome', ['item' => $item,'date' => $date,'capacity' => $capacity,'bustype' => $bustype]);

   }
}
