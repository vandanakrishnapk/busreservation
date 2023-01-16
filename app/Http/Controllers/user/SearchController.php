<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;

class SearchController extends Controller
{ 
public function search(Request $request)
{
    $query= DB::table('buses')
    ->join('locations', 'buses.location', '=','locations.id')
    ->join('capacities', 'buses.capacity', '=', 'capacities.id')
    ->join('bus_types','buses.bus_type','=','bus_types.id')    
    ->select('buses.bus_name','buses.bus_plate_no','buses.date','locations.places','capacities.No_of_seats','bus_types.bus_types');   
   
$location = $request->get('location');
$date = $request->get('date');
$capacity = $request->get('No_of_seats');
$bustype =$request->get('bus_type');


if ('' != $location) { 

    $query = $query->where('location', $location);
}


if('' != $date)
{
    $query = $query->where('date', $date);
}

if('' != $capacity)
{
    $query = $query->where('capacity', $capacity);
}

if('' != $bustype)
{
    $query = $query->where('bus_type', $bustype);
}
$query = $query->get();

$detail = $query;

return view('user.search',compact('detail'));
}

}
