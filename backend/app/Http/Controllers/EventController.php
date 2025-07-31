<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\TicketCategory;
use App\Models\Seat;

class EventController extends Controller
{
    public function index()
    {
        $data = Event::select('id', 'title',"description","image_url","event_date","venue_id")
                ->with('venue:id,name')
                ->get();

        return response()->json(
            [
                'status' => "success",
                'message' => __('message.success'),
                'data' => $data
            ], 200);
    }

    public function show($id)
    {
        $data = Event::select('id', 'title',"description","image_url","event_date","venue_id")
            ->with('venue:id,name,address')
            ->find($id);

        $ticket_categories = TicketCategory::select('id', 'name')->get();

        if (!$data) {
            return response()->json(
                [
                    'status' => "error",
                    'message' => __('message.not_found')
                ], 404);
        }

        return response()->json(
            [
                'status' => "success",
                'message' => __('message.success'),
                'data' => $data,
                'ticket_categories' => $ticket_categories
            ], 200);
    }

    public function getSeats($event_id)
    {
        $event = Event::find($event_id);
        
        $data = Seat::where('venue_id', $event->venue_id)->get();
        return response()->json(
            [
                'status' => "success",
                'message' => __('message.success'),
                'data' => $data
            ], 200);
    }
}