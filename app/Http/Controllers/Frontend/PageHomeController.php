<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
class PageHomeController extends Controller
{
    public function index(){
         $slider = Slider::where('status','1')->first();
         $title = "Anasayfa";
        return view('front.pages.index', compact('slider', 'title'));
    }
}
