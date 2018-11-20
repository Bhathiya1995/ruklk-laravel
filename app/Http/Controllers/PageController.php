<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PageController extends Controller
{
    public function index(){
        $event = Event::all();
        return view('Home')->with('event',$event);
    }
}
