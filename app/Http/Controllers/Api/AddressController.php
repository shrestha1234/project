<?php

namespace Lost\Http\Controllers\Api;

use Illuminate\Http\Request;

use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;
use Lost\Models\Country;
use Lost\Models\District;
use Lost\Models\State;
use Lost\Models\Zone;

class AddressController extends Controller
{
    public function getCountry()
    {
        return Country::all();
    }
    public function getState()
    {
        return State::all();
    }
    public function getZone()
    {
        return Zone::all();
    }
    public function getDistrict()
    {
        return District::all();
    }


}
