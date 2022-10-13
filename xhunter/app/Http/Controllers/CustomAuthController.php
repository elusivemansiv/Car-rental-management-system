<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{

    public function home(){
           
        return view('home');
    }
    public function login(){
           
        return view('auth.login');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function registerUser(Request $request){
        $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users',
          'password'=>'required|min:3|max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make ($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully');
        }else{
            return back()->with('fail', 'Something Went Wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
          'email'=>'required|email',
          'password'=>'required|min:3|max:12'
        ]);

        $user = User::where('email','=',$request->email)->first();
    
        if($user){
              
            if(Hash::check($request->password, $user->password)){
               $request->session()->put('loginId', $user->id);
               return redirect('dashboard');
            }else{
                
                return back()->with('fail', 'Incorrect Password');
            }
            
        }else{
            return back()->with('fail', 'this email is not registered');
        }
    }

    public function dashboard()
    {
        
        return view('dashboard');
    }

    public function logout()
    {
        
        return redirect('login');
    }
}
