<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function booking()
   {
    $query= DB::table('buses')
    ->join('locations', 'buses.location', '=','locations.id')
    ->join('capacities', 'buses.capacity', '=', 'capacities.id')
    ->join('bus_types','buses.bus_type','=','bus_types.id') 
    ->select('buses.bus_name','buses.bus_plate_no','buses.date','locations.places','capacities.No_of_seats','bus_types.bus_types');   
  $pay = DB::table('transactions')
  ->select('transactions.status')
  ->first();
$query=$query->first();
$item=$query;
    return view('user.booking',['item' => $item,'pay' => $pay]);
   }
   public function create_booking(Request $request)
   {
    $request->validate([ 
        'user_id' => 'required',
        'places' => 'required',
        'date' => 'required',  
        'payment_status' => 'required',
        'available_seats' => 'required',
        'booking_status' => 'required',
        ]);
       Booking::create([
        'user_id' => $request->user_id,
        'places' => $request->places,
        'date' => $request->date,
        'payment_status' => $request->payment_status,
        'available_seats' => $request->available_seats,
        'booking_status' => $request->booking_status,
       ]);       
       return view('home');
       }
   
}
