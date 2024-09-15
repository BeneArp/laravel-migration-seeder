<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function home(){

        $todayDate = date('Y-m-d');

        $trains = Train::whereDate('departure_date', '=', $todayDate)->get();

        return view('home', compact('trains'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
