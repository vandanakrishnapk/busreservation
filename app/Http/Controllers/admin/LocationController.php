<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Location;
use App\Http\Controllers\Controller;


class LocationController extends Controller
{
    public function location()
    {
       return view('admin.location');
    }
    public function create_location(Request $request)
    {    
       $request->validate([
          'places' =>'required|unique:locations',
       ]);
       Location::create($request->all());         
           return redirect()->route('location');
    } 
}
