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
            'total_amount' => 'required',
            'cc_number' => 'required',
            'cc_exp_month' => 'required',
            'cc_exp_year' => 'required',
            'cc_cvv' => 'required',
            'cc_holder_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => __('message.required'),
            'numeric' => __('message.numeric'),
            'integer' => __('message.integer'),
            'exists' => __('message.exists'),
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