<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){


       $latestmenu = Menu::orderBy('created_at','desc')->paginate(3);
        
        return view('welcome',compact('latestmenu'));
    }
}