<?php

namespace App\Http\Controllers\owner;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Location;
use App\Models\Capacity;
use App\Models\Bustype;
class BusController extends Controller
{
  public function view_bus()
  {
    $items = DB::table('buses')
    ->join('locations', 'buses.location', '=','locations.id')
    ->join('capacities', 'buses.capacity', '=', 'capacities.id')
    ->join('bus_types','buses.bus_type','=','bus_types.id')
    ->select('buses.bus_name','buses.bus_plate_no','buses.date','locations.places','capacities.No_of_seats','bus_types.bus_types')
    ->get();    
    return view('owner.view_bus',['items' => $items]);
  }
}