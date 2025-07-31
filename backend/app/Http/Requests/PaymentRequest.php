<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PaymentRequest extends FormRequest
{
    /**
     * İsteğin yetkilendirilip yetkilendirilmediğini belirle
     */
    public function authorize()
    {
        return true; // Şimdilik tüm isteklere izin ver
    }

    /**
     * Validation kuralları
     */
    public function rules()
    {
        return [
            "category_id" => 'required',
            "seat_id" => 'required',
            "customer_name" => 'required',
            "customer_surname" => 'required',
            "customer_email" => 'required',
            "customer_phone" => 'required',
            "cc_number" => 'required',
            "cc_exp_month" => 'required',
            "cc_exp_year" => 'required',
            "cc_exp_cvv" => 'required',
            "event_id" => 'required'
            //'order_id' => 'required|exists:orders,id',
        ];
    }

    public function messages()
    {
        return [
            'required' => __('message.required')
        ];
    }

    /**
     * Validation başarısız olduğunda çalışır
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status' => 'error',
                'message' => 'Validation hatası',
                'errors' => $validator->errors(),
            ], 422)
        );
    }
} 