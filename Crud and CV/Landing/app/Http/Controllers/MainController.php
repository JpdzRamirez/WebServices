<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        
       // $assosiative_array = json_decode(json_encode($allUsers),true); ,compact('allUsers')
        return view('landing.index');
    }
    public function about(){
        
        // $assosiative_array = json_decode(json_encode($allUsers),true); ,compact('allUsers')
         return view('landing.about');
     }
     public function menu(){
        
        // $assosiative_array = json_decode(json_encode($allUsers),true); ,compact('allUsers')
         return view('landing.menu');
     }
     public function store(){
        
        // $assosiative_array = json_decode(json_encode($allUsers),true); ,compact('allUsers')
         return view('landing.store');
     }
}
