<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bus_type;
use App\Http\Controllers\Controller;

class BustypeController extends Controller
{
    public function bus_type()
    {
       return view('admin.bus_type');
    }
    public function create_bus_type(Request $request)
    {
       $request->validate([
          'bus_types' =>'required|unique:bus_types',
       ]);
       Bus_type::create($request->all());         
           return redirect()->route('bus_type');
    }
}
