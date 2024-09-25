<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\State;
use App\Models\Countrymdl;
use Yajra\DataTables\DataTables;



class HomeController extends Controller
{
    public function index(){
       return View('home');
    }
    public function dashboard()
    {
        return view('deshboard'); 
    }

    public function getdata() {
       
        $states = State::with(['country', 'cities'])->get();

         return DataTables::of($states) 
        ->addColumn('country_name', function ($state) {
            return $state->country ? $state->country->name : '';
        })
        ->addColumn('cities', function ($state) {
            return $state->cities->pluck('name')->implode(', ');
        })
        ->make(true);
    }
    
}
