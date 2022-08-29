<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function getCity($idProvince){
        try {            
            $city = City::where('id_province', $idProvince)->get();
            return $city->toJson(JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            return $e;
        }
        
    }
}
