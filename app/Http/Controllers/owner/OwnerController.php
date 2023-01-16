<?php
namespace App\Http\Controllers\owner;
use Illuminate\Http\Request;
use App\Models\Bus_type;
use App\Models\Capacity;
use App\Models\Location;
use App\Models\Bus;
use App\Models\Owner;
use App\Http\Controllers\Controller;
class OwnerController extends Controller
{
    public function bus()
    {      
      $bus_type = Bus_type::all();
      $capacity = Capacity::all();
      $place = Location::all();
      $dest = Location::all();
       return view('owner.bus',compact('bus_type','capacity','place','dest'));
    }
    public function createBus(Request $request)
    { 
     $request->validate([          
      'bus_plate_no' => 'required|unique:buses,bus_plate_no',
      'date' => 'required',
      'bus_name' => 'required',
      'bus_type' => 'required',
      'capacity' => 'required',    
     'location' => 'required',
     ]);
     Bus::create($request->all());
     return redirect()->route('view_bus')
     ->with('success','created successfully.');
    }

}
