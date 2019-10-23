<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\State;

class CountryStateController extends Controller
{
    //
    public function getCountries()
    {
        $data = Country::get();

        return response()->json($data);
    }

    /**
     * Retrieve states data
     *
     */
    public function getStates(Request $request)
    {
        $data = State::where('country_id', $request->country_id)->get();

        return response()->json($data);
    }
}
