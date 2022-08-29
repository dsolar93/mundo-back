<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function getProvince($idState){
        \Log::error(['var'=>$idState]);
        try {            
            $province = Province::where('id_state', $idState)->get();
            return $province->toJson(JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            return $e;
        }
        
    }
}
