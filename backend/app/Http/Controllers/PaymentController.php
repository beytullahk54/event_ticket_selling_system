<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use App\Http\Requests\PaymentRequest;
use App\Models\Ticket;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use App\Http\Services\PaymentService;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }
    public function store(PaymentRequest $request)
    {
        try {            
            $request = $request->validated();
            $payment = $this->paymentService->createPayment($request);
            return response()->json(
                [
                    "order_id" => $payment['order_id'],
                    "total_amount" => $payment['total_amount'],
                    "ticket_id" => $payment['ticket_id'],
                    "payment_id" => $payment['payment_id'],
                    'status' => "success",
                    'message' => "Biletiniz başarıyla oluşturuldu",
                ], 201);
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => "error",
                    'message' => "Biletiniz oluşturulurken bir hata oluştu",
                ], 500);
        }
       
      
    }
}