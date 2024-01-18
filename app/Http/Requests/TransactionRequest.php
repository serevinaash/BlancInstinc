<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'status' => 'in:PENDING,SUCCESS,CANCELED,FAILED,SHIPPING,SHIPPED,CHALLENGE'
        ];
    }
}
