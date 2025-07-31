<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use App\Http\Requests\PaymentRequest;
use App\Models\Ticket;

class PaymentController extends Controller
{
    public function store(PaymentRequest $request)
    {
        $request = $request->validated();
        $order = Order::create($request);

        $request['order_id'] = $order->id;
        $ticket = Ticket::create($request);

        return $ticket;
        return response()->json(
            [
                'status' => "success",
                'message' => "Biletiniz başarıyla oluşturuldu",
            ], 201);
    }
}