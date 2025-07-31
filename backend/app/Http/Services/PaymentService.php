<?php

namespace App\Http\Services;

use App\Models\Order;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentService
{
    public function createPayment($request)
    {
        try {
            DB::beginTransaction();
            $event = Event::find($request['event_id']);
            $order = $this->createOrder($request);
            $personCount = $this->getPersonCount($request);
            $ticket = $this->createTicket($request, $event, $order, $personCount);
            $payment = $this->createPaymentFunction($request, $event, $order, $personCount);
    
            return [
                'order_id' => $order->id,
                'total_amount' => $event->amount * $personCount,
                'ticket_id' => $ticket->id,
                'payment_id' => $payment->id,
            ];

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
      
    }

    public function createOrder($request)
    {
        $order = Order::create($request);
        return $order;
    }

    public function createTicket($request, $event, $order, $personCount)
    {
        $request['order_id'] = $order->id;
        $request['total_amount'] = $event->amount * $personCount; 
        $ticket = Ticket::create($request);
        return $ticket;
    }

    public function createPaymentFunction($request, $event, $order, $personCount)     
    {
        $request['order_id'] = $order->id;  
        $request['total_amount'] = $event->amount * $personCount;
        $payment = Payment::create($request);
        return $payment;
    }

    public function getPersonCount($request)
    {
        $personCount = count(explode(',', $request['seat_id']));
        return $personCount;
    }
}
