<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\Service;

class mainController extends Controller
{
    public function index(){
        $about = about::find(1); 
        $service = Service::all(); 
        return view('index', compact('about','service'));
    }

    
}
