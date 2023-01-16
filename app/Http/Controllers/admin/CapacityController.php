<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Capacity;
use App\Http\Controllers\Controller;


class CapacityController extends Controller
{
    public function capacity()
    {
       return view('admin.capacity');
    }
    public function create_capacity(Request $request)
    {    
       $request->validate([
          'No_of_seats' =>'required|unique:capacities',
       ]);
     Capacity::create($request->all());
    return redirect()->route('capacity');
    } 
}
