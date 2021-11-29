<?php

namespace App\Http\Controllers\Dashbord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Redirect;

class RatingController extends Controller
{
   
    public function addRate($id,Request $request){
               $rate = new Rating();
               $macAddr = exec('getmac');
               $rate->mac_address = $macAddr;
               $rate->store_id = $id;
               $rate->rate = $request->rating;
               $result = $rate->save();
               return redirect()->back();
    }


    
}
