<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Street;

class StreetController extends Controller
{
    public function getStreet($idCity){
        try {            
            $street = Street::where('id_city', $idCity)->get();
            return $street->toJson(JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            return $e;
        }
        
    }
}
