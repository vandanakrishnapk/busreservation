<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Owner;
use App\Models\Admin;
use App\Models\Location;
use App\Models\Capacity;
use App\Models\Bus_type;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function manage_owner()
    {
     $approve = Owner::all();
     return view('admin.manage_owner',compact('approve'));
    }
    public function dashboard()
    {
     return view('admin.analytics');
    }
  
    public function update($id)
    {    
     $admin = Auth::user()->id;
     DB::table('owners')->where('id',$id)->update(['status' => 'approved',
     'approved_by'=> $admin]);
     return redirect()->route('manage_owner')->with('success','updated successfully');
    } 
    }
