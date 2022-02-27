<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'show_time' => 'required',
            'tickets' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'show_time.required' => 'Please select your booking time',
            'tickets.required' => 'How many seats would you like to book for?'
        ];
    }
}
