<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        return response()->json(
            [
                'status' => "success",
                'message' => __('message.success'),
                'data' => $request->all()
            ], 200);
    }
}