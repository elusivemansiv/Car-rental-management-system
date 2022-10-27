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
          'role'=>'required',
          'first_name'=>'required',
          'last_name'=>'required',
          'username'=>'required|unique:users',  
          'email'=>'required|email|unique:users', 
          'Date_of_birth'=>'required',  
          'gender'=>'required',  
          'phone_number'=>'required',  
          'address'=>'required',  
          'nid_number'=>'required',  
          'dl_number'=>'required',  
          'password'=>'required|min:3|max:12',

          
        ]);
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->dob = $request->Date_of_birth;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->nid_number = $request->nid_number;
        $user->dl_number = $request->dl_number;
        $user->password = Hash::make ($request->password);
        $user->type = $request->role;
        $user->pp = $request->pp;
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
    
        // if($user){
              
        //     if(Hash::check($request->password, $user->password) && ($user->type='Customer')){
        //        $request->session()->put('loginId', $user->id);
        //        return redirect('dashboard_customer');
        //     }
        //     elseif(Hash::check($request->password, $user->password) && ($user->type='Renter')){
        //         $request->session()->put('loginId', $user->id);
        //         return redirect('dashboard_renter');
        //     }
        //     elseif(Hash::check($request->password, $user->password) && ($user->type='Admin')){
        //         $request->session()->put('loginId', $user->id);
        //         return redirect('dashboard_admin');
        //     }
        //     else{
                
        //         return back()->with('fail', 'Incorrect Password');
        //     }
            
        // }else{
        //     return back()->with('fail', 'this email is not registered');
        // }


        $uname="";
        if($user){
            if(Hash::check($request->password, $user->password)){
              if($user->type=='Customer'){
                $request->session()->put('customer', $user->username);
                   
                 return redirect('dashboard_customer');
              }
              elseif($user->type=='Renter'){
                $request->session()->put('renter', $user->username);
                  
                  return redirect()->route('dashboard_renter');
              }
              else{
                $request->session()->put('admin', $user->username);
                 
                  return redirect('dashboard_admin');
              }
  
  
            }
             else{
  
                  return back()->with('fail', 'Incorrect Password');
              }
  
          }else{
              return back()->with('fail', 'this email is not registered');
          }
    }

    public function dashboard_admin()
    {
        
        return view('dashboard_admin');
    }

    public function dashboard_customer()
    {
        
        return view('dashboard_customer');
    }

    public function dashboard_renter()
    {
        
        return view('Renter_Pages.dashboard_renter');
    }
   

    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}
