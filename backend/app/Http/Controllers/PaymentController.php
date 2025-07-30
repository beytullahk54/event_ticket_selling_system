<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\PaymentRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(PaymentRequest $request)
    {
        $validated = $request->validated();
        return $validated;

        // $payment = Payment::create($validated);

        return response()->json(
            [
                'status' => "success",
                'message' => __('message.success'),
                'data' => $request->all()
            ], 200);
    }
}