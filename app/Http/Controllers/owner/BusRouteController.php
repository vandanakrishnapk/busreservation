<?php

namespace App\Http\Controllers\owner;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Busroute;
use App\Models\Location;
class BusRouteController extends Controller
{
    public function busRoute()
    {   
        $bus = Bus::all();
        $location = Location::all();       
        return view('owner.busRoute',compact('bus','location'));
    }
    public function createBusRoute(Request $request)
    {
        $request->validate([      
            'bus_id' => 'required',
            'location' => 'required',                      
           ]);
           Busroute::create($request->all());
           return view('owner.owner');       
    }
}
