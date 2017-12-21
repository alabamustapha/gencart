<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopperController extends Controller{
    public function dashboard(){
       return view('shopper.dashboard');
    }
   
    public function delivered(){
        return view('shopper.delivered');
    }

    public function available(){
        return view('shopper.available');
    }

    public function statistics(){
        return view('shopper.statistics');
    }

    public function settings(){
        return view('shopper.settings');
    }


}