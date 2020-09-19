<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientMailRequest extends FormRequest
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
        $this->redirect =  url()->previous() . '/#email';

        return [
            'name' => 'required|string|min:1',
            'email' => 'required|email',
            'message' => 'required|string:min:1',
        ];
    }
}
