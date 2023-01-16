<?php

namespace App\Http\Controllers\owner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\Owner;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function view_profile()
    {       
        $owner =Auth::user();
        return view('owner.profile',compact('owner'));
    
    }
    public function edit_profile()
    {       
        $owner=Auth::user();
        return view('owner.edit_profile',compact('owner'));
    }
    public function update_profile($id,Request $request)
    {
        $owner=Owner::find($id);
        $owner->name=$request->input('name');
        $owner->mobile_no=$request->input('mobile_no');
        $owner->email=$request->input('email');
        if ($request->hasFile('profile_photo')) {
            $path = 'asset/storage/images/'.$owner->profile_photo;
            if(File::exists($path)){
                File::delete($path);
            }
            $fileName=time().$request->file('profile_photo')->getClientoriginalName();
            $path=$request->file('profile_photo')->storeAs('images',$fileName,'public');
            $data["profile_photo"]='/storage/'.$path;
            $owner->profile_photo=$fileName;
            $owner->update();
        }
        $owner->update();
     return redirect()->route('view_profile');
    }
}
