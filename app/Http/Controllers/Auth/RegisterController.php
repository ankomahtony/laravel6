<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type'=> 'required',
            'picture' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'approved' => ''
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $users=User::all();
        $user = new User();
        $user->name =  $data['name'];
        $user->email =  $data['email'];
        if($users->count()==0)
        {
            $user_type = 'Admin';
            $user->user_type =  $user_type;
            $user->approved =  'Yes';
        }else
        {
            $user->user_type =  $data['user_type'];
            $user->approved =  $data['approved'];
        }
        $user->password =  Hash::make($data['password']);
        if(request('picture') != NULL){
            $fileName_s = $data['name'].request('user_type');;
            $fileName = $fileName_s.'.'.$data['picture']->extension(); 
            $data['picture']->move(public_path('images/user'), $fileName);
            
        }else
        {
            $fileName ='avatar.PNG';
        }
        $user->picture = $fileName;
        $user->save();
        
    }
}
