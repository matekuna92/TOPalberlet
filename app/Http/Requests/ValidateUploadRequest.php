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

    public function messages()
    {
        return [
            'city.required' => 'Kérem adja meg a város nevét!',
            'street.required' => 'Kérem adja meg az utca nevét!',
            'price.required' => 'Kérem adja meg az árat!',
            'size.required' => 'Kérem adja meg az alapterületet!',
            'rooms.required' => 'Kérem adja meg a szobák számát!',
            'housetype.required' => 'Kérem adja meg a lakás típusát!',
            'photo_id.required' => 'Kérem töltsön fel képet!'
        ];
    }

            //'email.unique' => 'Email already taken m8',

}
