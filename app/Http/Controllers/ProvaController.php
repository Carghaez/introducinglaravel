<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;

class ProvaController extends Controller
{
    function test(City $city)
    {
      return $city->name;
    }
}
