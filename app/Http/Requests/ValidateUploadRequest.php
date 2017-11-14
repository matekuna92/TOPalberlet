<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUploadRequest extends FormRequest
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
            //
            'city' => 'required',
            'street' => 'required',
            'type' => 'required',
            'category' => 'required',
            'price' => 'required',
            'size' => 'required',
            'rooms' => 'required',
            'empty' => 'required',
            'housetype' => 'required',
            'heating' => 'required',
            'photo_id' => 'required'
        ];
    }
}
