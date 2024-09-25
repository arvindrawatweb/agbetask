<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Countrymdl;
use App\Models\User;
use Hash;


class UsersController extends Controller
{
  public function userform(){
    $cnty=Countrymdl::get();
    
    return View('userregister',compact('cnty'));
  }

  public function login(){
    return View('login');
  }

  public function store(Request $request)
  {
    
       $userReg=User::create([
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
          'dob' => $request->dob,
          'email' => $request->email,
          'mobile_number' => $request->mobile_number,
          'password' =>  Hash::make($request->password),
           
          'country_id' => $request->country_id,
          'state_id' => $request->state_id,
          'city_id' => $request->city_id,
          'locality' => $request->locality,
          'pincode' => $request->pincode,
      ]);

      if($userReg){
        return redirect()->route('login')->with('success','User Registered Successfully');
      }else{
        return redirect()->back()->with('error','User Registration Failed');
      }

  }

  public function userlogin(Request $request){
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      return redirect()->back()->with('success','User Login  Successfully');
  } else {
      return redirect()->back()->with('error', 'Invalid credentials.'); 
  }
  }

  public function logout(Request $request){
    Auth::logout();
   return redirect()->route('login');
  }



}
