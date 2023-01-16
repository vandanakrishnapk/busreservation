<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');  
        $this->middleware('guest:owner');    
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'mobile_no' => ['required','max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],  
            'profile_photo' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ]);
    }
    public function showOwnerRegisterForm()
    {
        return view('auth.register', ['url' => 'owner']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'mobile_no' =>$data['mobile_no'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile_photo' =>$data['profile_photo'],
        ]);
    }   
    protected function createOwner(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile_no' =>'required|string|max:12|min:10',            
            'email' => 'required|unique:owners',
            'password' => 'required|string|min:6|confirmed',
            'profile_photo' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName=time().$request->file('profile_photo')->getClientoriginalName();
        $owner=Owner::create([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,            
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_photo' =>$fileName,
        ]);
       
        $path=$request->file('profile_photo')->storeAs('images',$fileName,'public');
        $hotels["profile_photo"]='/storage/'.$path;
      return redirect()->route('login');
    } 
   
}