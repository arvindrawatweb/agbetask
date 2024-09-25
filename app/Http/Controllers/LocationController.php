<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
class LocationController extends Controller
{
    public function getstates(Request $request)
    {
       
        $id = $request->id;
    
        $getstates = State::where('country_id', $id)->get();

        if ($getstates->isNotEmpty()) {
            $html = '<option value="">--Select State--</option>'; 

            foreach ($getstates as $state) {
                $html .= "<option value='$state->id'>$state->name</option>"; 
            }
            return response()->json(['success' => true, 'states' => $html]);
        } else {
            return response()->json(['success' => false, 'message' => 'States not found'], 404);
        }
    }

    public function getcitys(Request $request)
    {
        $stateid = $request->id;
        $getCity = City::where('state_id', $stateid)->get();

        if ($getCity->isNotEmpty()) {
            $html = '<option value="">--Select City--</option>';

            foreach ($getCity as $city) {
                $html .= "<option value='$city->id'>$city->name</option>";
            }
            return response()->json(['success' => true, 'cities' => $html]);
        } else {
            return response()->json(['success' => false, 'message' => 'Cities not found'], 404);
        }
    }


}
