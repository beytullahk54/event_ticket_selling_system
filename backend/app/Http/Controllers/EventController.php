<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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
            ->with('venue:id,name')
            ->find($id);

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
                'data' => $data
            ], 200);
    }
}