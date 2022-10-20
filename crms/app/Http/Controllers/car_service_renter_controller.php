<?php

namespace App\Http\Controllers;
use App\Models\car_service;
use Illuminate\Http\Request;

class car_service_renter_controller extends Controller
{
    public function addNewCar(){
           
        return view('addNewCar');
    }

    public function messageRenter(){
           
        return view('messageRenter');
    }
    public function postCarVideo(){
           
        return view('postCarVideo');
    }
}
