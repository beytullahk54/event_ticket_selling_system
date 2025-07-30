<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::get();
        return response()->json($events);
    }

    public function show($id){
        $event = Event::find($id);
        return response()->json($event);
    }
}