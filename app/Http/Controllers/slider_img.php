<?php

namespace App\Http\Controllers;
use App\Models\productSlider;
use Illuminate\Http\Request;

class slider_img extends Controller
{
    public function show_slider()
    {
       $data= productSlider::all();

        return view('user.home',compact('data'));
        
    }
}
